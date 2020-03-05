<div class="filter_by_price_1">
    <div class="filter_by_price_1_heading">
        <span>by Price</span>
    </div>
    <form class="" action="index.html" method="post">
        <input type="range" multiple min="0" step="1" max="100" data-values="1 9">
    </form>
</div>

<script type="text/javascript">
    var elm = document.querySelector('input');
    var container = elm.parentNode;
    var values = elm.getAttribute('data-values').split(' ');

    values.forEach(function (value, i, values) {
    var rangePart = elm.cloneNode();
    rangePart.type = 'range';
    rangePart.removeAttribute('data-values');
    rangePart.value = value;
    rangePart = container.insertBefore(rangePart, elm);
    });

    elm.remove();
</script>
