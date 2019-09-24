function fileValidation(obj) {
                    var filePath = obj.value;
                    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                  
                    if (!allowedExtensions.exec(filePath)) {
                        alert('You can only select files with .jpeg/.jpg/.png/.gif extension.');
                        obj.value = '';
                        return false;
                    } else {
                       
                        if (obj.files && obj.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                document.getElementById('imagePreview'+obj.id).innerHTML = '<img style="width:100px;" src="' + e.target.result + '"/>';
                            };
                            reader.readAsDataURL(obj.files[0]);
                        }
                    }
                }