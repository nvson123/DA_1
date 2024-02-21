</div>
    </div>
    <script src="assets/js/main.js"></script>
    <script>
        new DataTable('#example');
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script>
        $(document).ready(function(){
            thongKe();
            var char = new Morris.Area({
            element: 'chart',
            xkey: 'date',
            ykeys: [  'total_money'],
            labels: [ 'Tổng tiền']
            });
            // $('.select-thongke').change(function(){
            //     $.ajax({
            //         url: 'http://localhost/Fpoly/SP24/DA1_Github/web/controller/thongke.php',
            //         type: 'POST',
            //         dataType: 'JSON',
            //         success: function(data) {
            //             var html = '';
            //             var i;
            //             for (i = 0; i < data.length; i++) {
            //                 html += '<tr>' +
            //                     '<td>' + data[i].year + '</td>' +
            //                     '<td>' + data[i].value + '</td>' +
            //                     '</tr>';
            //             }
            //             $('#example').html(html);
            //         }
            //     });
            // });
            function thongKe() {
                var text = 'Năm nay';
                $.ajax({
                    url: 'Models/thongke.php',
                    type: 'POST',
                    dataType: 'JSON',
                    success: function(data) {
                            char.setData(data);
                            $('#text-date').text(text);
                        }
                    });
            }
        });
    
    </script>
</body>

</html>