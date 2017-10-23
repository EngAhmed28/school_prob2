<div   style="height: 100%;margin-top: 60%"></div>
<footer >
    <div class="container">
        <div class="row vcenter">
            <div class="pull-left col-lg-4 col-xs-12">
                <p>تم التصميم والتطوير بواسطة &copy;شركة الاثير تك </p>
                <a href="https://www.alatheertech.com/">https://www.alatheertech.com/</a>
            </div>
            <div class="col-lg-4 col-lg-offset-4 col-xs-12">
                <div class="pull-right">
                    <a href="#"><i class="fa fa-behance-square fa-icon"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square fa-icon"></i></a>
                    <a href="#"><i class="fa fa-twitter-square fa-icon"></i></a>
                    <a href="#"><i class="fa fa-skype fa-icon"></i></a>
                    <a href="#"><i class="fa fa-facebook-square fa-icon"></i></a>
                    <a href="#"><i class="fa fa-github-square fa-icon"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
</div>




<!---------- flow chart ----------->
<script>
    $(document).ready(function() {
        columnChart();

        function columnChart() {
            var item = $('.chart', '.column-chart').find('.item'),
                itemWidth = 100 / item.length;
            item.css('width', itemWidth + '%');

            $('.column-chart').find('.item-progress').each(function() {
                var itemProgress = $(this),
                    itemProgressHeight = $(this).parent().height() * ($(this).data('percent') / 100);
                itemProgress.css('height', itemProgressHeight);
            });
        };
    });

</script>

</body>

</html>
