<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Images view</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
    <body>

        <form id="form-id">
            <div style="margin: 20px 0">
                <label>file</label>
                <input type="file" accept="image/jpeg" id='name-input' name="image">
            </div>
            <div style="margin: 20px 0">
                <input type="submit" value="submit"><br/>
            </div>
        </form>

        <div id="data-container"></div>

        <script>

            $(document).ready(function () {

                $('#form-id').on('submit', function (e) {
                    e.preventDefault();
                    $.ajax({
                        url: 'http://localhost:8888/images',
                        type: "POST",
                        enctype: 'multipart/form-data',
                        //this automatically wraps our form data as key value pairs
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            $('#name-input').val('')
                            $('#age-input').val('')
                            $("#data-container").html(`<img src="${data}">`);
                        }
                    });

                });
            })


        </script>

    </body>
</html>
