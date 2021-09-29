</div>
<!-- /#wrapper -->
<!-- PAGE SCRIPTS -->
<script src="./assets/dashboard/dist/js/pages/dashboard2.js"></script>
<!-- jQuery -->
<script src="./assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- include jQuery library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="./assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="./assets/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="./assets/admin/dist/js/sb-admin-2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<!-- DataTables JavaScript -->
<script src="./assets/admin/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
<script src="./assets/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
<script src="./assets/admin/js/raphael.min.js"></script>
<script src="./assets/admin/js/morris.min.js"></script>
<script src="./assets/admin/js/morris-data.js"></script>
<script src="./assets/admin/main.js"></script>
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    function hienthianh() {
        var fileSelected=document.getElementById('upload').files;
        console.log('fileSelected');
        if (fileSelected.length>0){
            var fileToLoad = fileSelected[0];
            var fileReader = new FileReader();
            fileReader.onload = function (fileLoaderEvent) {
                var srcData = fileLoaderEvent.target.result;
                var newImage= document.createElement('img');
                newImage.src=srcData;
                document.getElementById('displayImg').innerHTML=newImage.outerHTML;
            }
            fileReader.readAsDataURL(fileToLoad);
        }
        document.getElementById('anhcu').style.display = "none";
    }
    CKEDITOR.replace( 'editor1' );
</script>
</body>

</html>