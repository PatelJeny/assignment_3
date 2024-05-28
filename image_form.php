
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="file" id="imageInput"><br><br>
    <button onclick="uploadImage()">Upload Image</button>
    <div id="result"></div>

    <script>
        function uploadImage(){
            const input = document.getElementById('imageInput');
            const file = input.files[0];

            if(!file){
                document.getElementById('result').innerText = 'please select an image file to upload';
                return;
            }
            const formData = new FormData();
            formData.append('file',file);

            fetch('image.php',{
                method : 'POST',
                body : formData
            })
            
            .then (response => {
                if(response.ok){
                    document.getElementById('result').innerText = 'Image uploaded successfully:';
                    return;
                }
                else{
                    document.getElementById('result').innerText = 'Error:';
                    return;
                }
            }
            )

            // .then(data => {
            //     console.log(data.success)

            //     if(data.success){
            //         document.getElementById('result').innerText = 'Image uploaded successfully:';
            //         return;
            //     }
            //     else{
            //         document.getElementById('result').innerText = 'Error:';
            //         return;
            //     }
            // }

            // )

            .catch(error => {
                document.getElementById('result').innerText = 'Error:';
            });
                   

           
        }
    </script>
</body>
</html>