import {Modal, ModalBody, ModalContent, Spacer} from "@heroui/react";

export const CardsQrCodeModalFE = ({ card, onClose, baseUrl, themeColor, profileButtonColor }) => {

  const qrCodeImgUrl = card ? card.qrcode : '';
  const cardUrl = card ? `/card/${card.slug}` : '';

  const IconCopy = () => (
    <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" width="21" height="24" viewBox="0 0 21 24">
      <defs>
        <clipPath id="clip-path">
          <rect id="Rettangolo_1155" data-name="Rettangolo 1155" width="21" height="24" transform="translate(-0.15 0.177)"/>
        </clipPath>
      </defs>
      <g id="Raggruppa_558" data-name="Raggruppa 558" transform="translate(0.15 -0.177)">
        <g id="Raggruppa_557" data-name="Raggruppa 557" clipPath="url(#clip-path)">
          <path id="Tracciato_1061" data-name="Tracciato 1061"
                d="M7.306,19.483a2.44,2.44,0,0,1-2.435-2.435V2.435A2.35,2.35,0,0,1,5.585.715,2.35,2.35,0,0,1,7.306,0H18.265a2.35,2.35,0,0,1,1.721.715A2.35,2.35,0,0,1,20.7,2.435V17.047a2.44,2.44,0,0,1-2.435,2.435Zm0-2.435H18.265V2.435H7.306ZM2.435,24.354a2.35,2.35,0,0,1-1.721-.715A2.35,2.35,0,0,1,0,21.918V4.871H2.435V21.918H15.83v2.435Zm4.871-7.306v0Z"
                transform="translate(0 0)"
                fill={"white"}
          />
        </g>
      </g>
    </svg>
  );

  const IconClose = () => (
    <svg xmlns="http://www.w3.org/2000/svg" width="16.655" height="16.655" viewBox="0 0 16.655 16.655">
      <path id="Tracciato_1058" data-name="Tracciato 1058"
            d="M14.989,0,8.327,6.663,1.665,0,0,1.665,6.662,8.327,0,14.989l1.665,1.665L8.327,9.994l6.662,6.661,1.665-1.665L9.993,8.327l6.662-6.662Z"
            transform="translate(0 0)" fill={"white"}/>
    </svg>
  );

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
      hideCloseButton ={true}
      className={`flex items-center justify-center fixed ${
        themeColor === 'light' ? 'bg-white bg-opacity-94' : 'bg-black bg-opacity-50'
      } text-4xl`}
    >
      <ModalContent className="relative w-full h-full flex items-center justify-center">

        <button
          onClick={onClose}
          className="absolute top-4 right-4 w-10 h-10 flex items-center justify-center rounded-full"
          style={{backgroundColor: profileButtonColor}}
        >
          <IconClose className="text-white"/>
        </button>

        <ModalBody className="flex items-center justify-center w-full h-full">
          {qrCodeImgUrl && (
            <img src={qrCodeImgUrl} alt="QR Code" className="w-52 h-52"/>
          )}
          <Spacer y="4"/>
          <button
            className="flex items-center text-white w-16 h-16 rounded-full justify-center"
            style={{backgroundColor: profileButtonColor}}
            onClick={handleCopy}
          >
            <IconCopy/>
          </button>
        </ModalBody>
      </ModalContent>
    </Modal>
  );
};
