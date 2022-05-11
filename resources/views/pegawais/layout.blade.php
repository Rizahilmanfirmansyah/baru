<!DOCTYPE html>
<html>
    <head>
        <title>Crud Data Pegawai</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
            @yield('content')
        @livewireScripts
        <script>
            document.querySelectorAll('input[type-currency="IDR"]').forEach((element) => {
             element.addEventListener('keyup', function(e) {
             let cursorPostion = this.selectionStart;
             let value = parseInt(this.value.replace(/[^,\d]/g, ''));
             let originalLenght = this.value.length;
               if (isNaN(value)) {
                   this.value = "";
               } else {    
                   this.value = value.toLocaleString('id-ID', {
                   currency: 'IDR',
                   style: 'currency',
                   minimumFractionDigits: 0
                   });
                     cursorPostion = this.value.length - originalLenght + cursorPostion;
                     this.setSelectionRange(cursorPostion, cursorPostion);
               }
             });
           });
        </script>
    </body>
</html>