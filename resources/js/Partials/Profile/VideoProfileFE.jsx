import React from 'react';

const VideoProfileFE = ({ profile, themeColor, profileButtonColor, profileLinkColor }) => {
  const videoUrl = profile.profile_video;

  let embedUrl;

  let isYT = false;

  if (!videoUrl){
    return '';
  }

  if (videoUrl.includes('youtube.com') || videoUrl.includes('youtu.be')) {
    const videoID = videoUrl.split('v=')[1] || videoUrl.split('/').pop();
    embedUrl = `https://www.youtube.com/embed/${videoID}`;
    isYT = true;
  } else if (videoUrl.includes('vimeo.com')) {
    const videoID = videoUrl.split('/').pop();
    embedUrl = `https://player.vimeo.com/video/${videoID}`;
  }

  if (!embedUrl) {
    console.log("Errore: URL del video non valido");
    return '';
  }

  return (
    <div className="video-container" style={{ width: '100%' }}>
      <div style={{ position: 'relative', paddingBottom: '50%', height: 0, overflow: 'hidden' }}>
        <iframe
          style={{ position: 'absolute', top: 0, left: 0, width: '100%', height: '100%' }}
          src={embedUrl}
          frameBorder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowFullScreen
          title="Video Player"
        ></iframe>
      </div>
    </div>
  );
};

export default VideoProfileFE;
