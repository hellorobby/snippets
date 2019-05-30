/* BACKGROUND VIDEO */


.video-container {
  position: absolute;
  top: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.video-container video {
  /* Make video to at least 100% wide and tall */
  min-width: 100%;
  min-height: 100%;

  /* Setting width & height to auto prevents the browser from stretching or squishing the video */
  width: auto;
  height: auto;

  /* Center the video */
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}







<div class="video-container">
    <video autoplay muted loop id="myVideo">
        <source src="http://greenalternatives207.com/wp-content/uploads/2019/05/fp-video-part1.mp4" type="video/mp4" />
    </video>
</div>