import React, { useEffect, useRef, useState } from 'react';
import { Input, Button } from "@nextui-org/react";
import { useForm } from "@inertiajs/react";
import IconSave from "../../../../public/icons/png/icon-save.png";
import IconAddNewDocument from "../../../../public/icons/png/icon-add-profile.png";
import IconDocument from "../../../../public/icons/png/icon-fallback-document.png";
import IconDelete from "../../../../public/icons/png/icon-delete.png";
import IconCollapse from "../../../../public/icons/png/icon-collapse-on.png";
import IconExpand from "../../../../public/icons/png/icon-collapse-off.png";

const EditDocumentsProfile = ({ profile, translations }) => {
  const [activeDocumentId, setActiveDocumentId] = useState(null);
  const [isNewDocument, setIsNewDocument] = useState(false);
  const fileInputRef = useRef(null);

  const fileForm = useRef(null);

  const { data, setData, post, patch, delete: destroy, errors, clearErrors } = useForm({
    document_name: '',
    document_path: '',
  });

  const [isCollapsed, setIsCollapsed] = useState(profile.is_documents_collapsed);

  const toggleCollapse = () => {
    setIsCollapsed(!isCollapsed);
    patch(route('update-is-documents-collapsed', { id: profile.id, isDocumentsCollapsed: !isCollapsed }), {
      onSuccess: () => {
        fileForm.current.scrollIntoView({ behavior: 'smooth' });
      }
    });
  };

  useEffect(() => {
    if (profile?.documents?.length > 0 && !isNewDocument && !activeDocumentId) {
      const firstDocument = profile.documents[0];
      setActiveDocumentId(firstDocument.id);
      setData({
        document_name: firstDocument.document_name,
        document_path: firstDocument.document_path,
      });
    }
  }, [profile, isNewDocument, activeDocumentId, setData]);

  useEffect(() => {
    if (profile?.documents.length === 0) {
      setActiveDocumentId(null);
      setIsNewDocument(false);
      setData({
        document_name: '',
        document_path: '',
      });
    }
  }, [profile?.documents.length]);

  const handleDocumentClick = (id) => {
    setActiveDocumentId(id);
    setIsNewDocument(false);
    const document = profile.documents.find(doc => doc.id === id);
    setData({
      document_name: document.document_name,
      document_path: document.document_path,
    });
    clearErrors();
  };

  const handleAddNewDocument = () => {
    setIsNewDocument(true);
    setActiveDocumentId(null);
    setData({
      document_name: '',
      document_path: '',
    });
    clearErrors();
    fileInputRef.current.click();
  };

  const handleFileChange = (event) => {
    const file = event.target.files[0];
    if (file) {
      if (file.size > 20 * 1024 * 1024) { // 20MB in bytes
        alert('File is too large. Maximum size is 20MB.');
        fileInputRef.current.value = ''; // Clear the input
        return;
      }

      if (file.type === 'application/pdf') {
        setData({
          document_name: file.name,
          document_path: file,
        });
      } else {
        alert('Only PDF files are allowed');
        fileInputRef.current.value = ''; // Clear the input
      }
    }
  };

  const handleDocumentSubmit = (e) => {
    e.preventDefault();
    const formData = new FormData();
    formData.append('document_name', data.document_name);
    formData.append('document_path', data.document_path);
    formData.append('profile_id', profile.id);

    if (isNewDocument) {
      post(route('create-document', { id: profile.id }), formData, {
        onSuccess: () => {
          setIsNewDocument(false);
          fileForm.current.scrollIntoView({ behavior: 'smooth' });
        }
      });
    } else {
      post(route('update-document', { id: activeDocumentId }), formData, {
        onSuccess: () => {
          fileForm.current.scrollIntoView({ behavior: 'smooth' });
        }
      });
    }
  };

  const handleDocumentDelete = () => {
    if (activeDocumentId) {
      post(route('delete-document', { id: activeDocumentId }), {
        onSuccess: () => {
          setActiveDocumentId(null);
          setIsNewDocument(false);
          setData({
            document_name: '',
            document_path: '',
          });
          // Remove the deleted document from the profile's documents list
          profile.documents = profile.documents.filter(doc => doc.id !== activeDocumentId);
          fileForm.current.scrollIntoView({ behavior: 'smooth' });
        }
      });
    }
  };

  return (
    <>
      <div className="flex flex-wrap gap-4 p-1">
        {profile?.documents.map((document) => {
          const isActive = activeDocumentId === document.id && !isNewDocument;
          return (
            <div
              key={document.id}
              className={`w-auto rounded-full p-1 cursor-pointer ${isActive ? 'ring-2 ring-primary-bluett' : ''}`}
              onClick={() => handleDocumentClick(document.id)}
            >
              <img
                src={IconDocument}
                alt={document.document_name}
                className="w-16 h-16 rounded-full"
              />
            </div>
          );
        })}

        <div className="w-auto rounded-full p-1 cursor-pointer">
          <img
            onClick={handleAddNewDocument}
            src={IconAddNewDocument}
            alt="Add New Document"
            className="w-16 h-16 rounded-full"
          />
          <input
            type="file"
            ref={fileInputRef}
            style={{display: 'none'}}
            accept="application/pdf"
            onChange={handleFileChange}
          />
        </div>
      </div>

      {(activeDocumentId || isNewDocument) && (
        <form ref={fileForm} onSubmit={handleDocumentSubmit} className="space-y-3 mt-6">
          <Input
            type="text"
            id="document_name"
            value={data.document_name}
            onChange={(e) => setData('document_name', e.target.value)}
            color={errors.document_name ? "danger" : ""}
            errorMessage={errors.document_name}
            endContent={<img src={IconDelete} alt="Delete" className="size-8 cursor-pointer" onClick={handleDocumentDelete}/>}
          />

          <div className="flex justify-end items-end mt-4">
            <div>
              <Button
                type="submit"
                className="bg-transparent text-2xl font-light ps-font-color px-0"
                startContent={<img src={IconSave} alt="Salva" className="size-8"/>}
              >
                Save
              </Button>
            </div>
          </div>
        </form>
      )}

      <div className="flex justify-between mt-4">
        <div>
          <Button
            type="button"
            className="bg-transparent text-base font-medium px-0"
            onClick={toggleCollapse}
            startContent={<img src={isCollapsed ? IconCollapse : IconExpand} alt="Collapse/Expand" className="w-8"/>}
          >
            {translations.be_collapse}
          </Button>
        </div>
      </div>

    </>
  );
};

export default EditDocumentsProfile;
