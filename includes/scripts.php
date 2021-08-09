  <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!--	Font Awesome Code-->
	<script src="https://kit.fontawesome.com/e019d1e6be.js" crossorigin="anonymous"></script>

  	<!-----HALKABOX PLUGIN-->
	<script src="../js/halkabox/halkaBox.min.js">
	</script>
	<script>
		halkaBox.run("gallery1");
		halkaBox.options({
			hideButtons: true, // hide buttons on touch devices (true || false)
			animation: "sfade", // animation type on next/prev ("slide" || "fade")
			theme: "dark", // lightbox overlay theme ("light" || "dark")
			preload: 2, // number of images to preload
			swipeDownToClose: true, // swipe down to close (true || false)
			swipeUpToClose: true, // swipe up to close (true || false)
			nextPrevOnWheel: true, // goto next/prev image on wheel (true || false)
			isZoomable: true // ability to zoom image (true || false)
		});

	</script>