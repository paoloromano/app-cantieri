import {Button, Modal, ModalBody, ModalContent, ModalFooter, ModalHeader, Spacer} from "@heroui/react";
import copyUrlCard from "../../../../public/icons/svg/icon-copy.svg";

export const CardsQrCodeModal = ({ card, onClose, baseUrl }) => {

  const qrCodeImgUrl = card ? card.qrcode : '';
  const cardUrl = card ? `/card/${card.slug}` : '';

  const handleCopy = () => {
    if (cardUrl) {
      const fullUrl = `${baseUrl}${cardUrl}`;
      if (navigator.clipboard) {
        navigator.clipboard.writeText(fullUrl).then(() => {
          alert('Copied!');
        }).catch((err) => {
          console.error('Errore nella copia del testo: ', err);
          fallbackCopyTextToClipboard(fullUrl);
        });
      } else {
        fallbackCopyTextToClipboard(fullUrl);
      }
    }
  };

  const fallbackCopyTextToClipboard = (text) => {
    const textArea = document.createElement("textarea");
    textArea.value = text;
    textArea.style.position = "fixed";  // Avoid scrolling to bottom of page in MS Edge.
    textArea.style.opacity = 0; // Invisible

    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();

    try {
      const successful = document.execCommand('copy');
      if (successful) {
        alert('Copied!');
      } else {
        console.log('Errore nella copia del testo.');
      }
    } catch (err) {
      console.error('Errore nella copia del testo: ', err);
    }

    document.body.removeChild(textArea);
  };

  return (
    <Modal
      size="full"
      isOpen={Boolean(card)}
      onClose={onClose}
      className="flex items-center justify-center fixed bg-white bg-opacity-90 text-4xl"
    >
      <ModalContent className="relative w-full h-full flex items-center justify-center">

        <ModalBody className="flex items-center justify-center w-full h-full">
          {qrCodeImgUrl && <img src={qrCodeImgUrl} alt="QR Code" className="max-w-full max-h-full" />}
          <Spacer y="4" />
          <Button
            className="flex items-center bg-red text-white rounded-full "
            onClick={handleCopy}
          >
            <img src={copyUrlCard} alt="Copy Icon" className="w-8 h-8" />

          </Button>
        </ModalBody>

      </ModalContent>
    </Modal>
  );
};
