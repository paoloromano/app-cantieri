import {usePage} from "@inertiajs/react";
import {useState} from "react";
import {AttachmentsDeleteModal} from "@/Partials/Attachments/AttachmentsDeleteModal.jsx";
import {Button, Card, Tooltip} from "@nextui-org/react";
import {defaultStyles, FileIcon} from "react-file-icon";
import {AttachmentsEditModal} from "@/Partials/Attachments/AttachmentsEditModal.jsx";
import {IconDownload, IconPencil, IconTrash} from "@tabler/icons-react";

export const AttachmentsList = ({}) => {
  const {attachments} = usePage().props;
  const [showEditModal, setShowEditModal] = useState(false);
  const [showDeleteModal, setShowDeleteModal] = useState(false);

  const downloadAttachment = (attachment) => window.location.href = route('attachments.show', attachment['uuid']);

  return (
    <>
      {
        attachments.length === 0 ?
          <div className="w-full flex items-center justify-center h-48">
            <p className="text-gray-400 text-lg">Nessun allegato presente</p>
          </div>
          :
          <div className="grid gap-4 grid-cols-1 xl:grid-cols-2">
            {
              attachments.map((attachment) => {
                return (
                  <Card key={attachment['uuid']} className="w-full h-20 flex flex-row items-center gap-4 p-4">
                    <div className="min-w-10 max-w-10">
                      <FileIcon extension={attachment['extension']} {...defaultStyles[attachment['extension']]}/>
                    </div>
                    <div className="flex flex-col gap-1 truncate w-full">
                      <p className="truncate">
                        {attachment['name']}
                      </p>
                      <span className="text-gray-400 text-sm">{attachment['created_at']} · {attachment['size']}</span>
                    </div>
                    <div className="flex">
                      <Tooltip content="Scarica">
                        <Button isIconOnly size="sm" variant="light" onPress={() => downloadAttachment(attachment)}>
                          <IconDownload/>
                        </Button>
                      </Tooltip>
                      <Tooltip content="Modifica nome">
                        <Button isIconOnly size="sm" variant="light" onPress={() => setShowEditModal(attachment)}>
                          <IconPencil/>
                        </Button>
                      </Tooltip>
                      <Tooltip content="Elimina" color="danger">
                        <Button isIconOnly size="sm" color="danger" variant="light" onPress={() => setShowDeleteModal(attachment)}>
                          <IconTrash/>
                        </Button>
                      </Tooltip>
                    </div>
                  </Card>
                )
              })
            }
          </div>
      }

      <AttachmentsEditModal attachment={showEditModal} onClose={() => setShowEditModal(false)}/>
      <AttachmentsDeleteModal attachment={showDeleteModal} onClose={() => setShowDeleteModal(false)}/>
    </>
  );
};
