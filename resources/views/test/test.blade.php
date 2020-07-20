<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="{{route("test.submit")}}" method="post" id="config">
            @csrf
            <div id="div0">
                <input type="text" name="key[]" placeholder="key">
                <input type="text" name="value[]" placeholder="value">
                <button class="add">+</button>
                <button class="minus" data-id="div0">-</button>
            </div>
        </form>
        <div>
            <button id="submit-form" class="btn btn-primary">submit</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   

    <script>
        $(document).ready(function () {
            var index = 1;
            $(document).on("click",".add",function (e) {
                e.preventDefault();
            // $("#config").append(" <div id='div"+ index +"'>\n" +
            //     "        <input type=\"text\" name=\"key[]\" placeholder=\"key\">\n" +
            //     "        <input type=\"text\" name=\"value[]\" placeholder=\"value\">\n" +
            //     "        <button class=\"add\">+</button>\n" +
            //     "        <button class=\"minus\" data-id=\"div"+ index++ +"\">-</button>\n" +
            //     "    </div>");
            $("#config").append(`<div id="div`+ index +`" class="row">
                <div class="col-5">
                <input class="form-control" type="text" name="key[]" placeholder="Tên thông số">
                </div>
                <div class="col-5">
                <input class="form-control" type="text" name="value[]" placeholder="Thông số">
                </div>
                <div class="col-2">
                <button class="add btn"><i class="fa fa-plus-square"></i></button>
                <button class="minus btn" data-id="div`+ index++ +`"><i class="fa fa-times"></i></button>
                </div>
                </div>`);
            console.log(index);
        });
            $(document).on("click",".minus",function () {
                let id = $(this).data("id");
                $("#"+id).remove();
            });
            $(document).on("click","#submit-form",function () {
                $("#config").submit();
            })
        })
    </script>
</body>
</html>