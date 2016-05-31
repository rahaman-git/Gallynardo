Dropzone.options.addImages = {
	maxFileSize: 2,
	acceptedFiles: 'image/*',
	success: function (file, response) {
		// console.log(file);
		// console.log(response);
		if (file.status == 'success') {
			handleDropzoneFileUpload.handleError(response);
		} else {
			handleDropzoneFileUpload.handleSuccess(response);
		}
	}
};

var handleDropzoneFileUpload = {
	handleError: function (response) {
		console.log(response);
	},
	handleSuccess: function (response) {
		//console.log(response);
		var imageList = $('#gallery-images').find('ul');
		var imageSrc = baseUrl + '/' + response.file_path;
		$(imageList).append('<li><a href="' + imageSrc + '"><img src="' + imageSrc + '"></a></li>');
	}
};

$(document).ready(function() {
	console.log('Document is ready!!');
});

//# sourceMappingURL=all.js.map