import { Button, Modal, ModalBody, ModalContent, ModalFooter, ModalHeader } from "@nextui-org/react";
import { router } from "@inertiajs/react";
import { useState, useEffect } from 'react';

export const ProfileDeleteModal = ({ isOpen, onClose, onConfirm, translations }) => {
  return (
    <Modal
      isOpen={isOpen}
      onClose={onClose}
      className="items-center justify-center"
      placement={"center"}
    >
      <ModalContent>
        <ModalHeader>{translations.be_delete_profile}</ModalHeader>
        <ModalBody>
          {translations.be_delete_profile_message}
        </ModalBody>
        <ModalFooter>
          <Button className="ps-font-color pr-border-button" variant="bordered" onPress={onClose}>
            {translations.be_cancel}
          </Button>
          <Button color="danger" onPress={onConfirm}>
            {translations.be_delete}
          </Button>
        </ModalFooter>
      </ModalContent>
    </Modal>
  );
};
