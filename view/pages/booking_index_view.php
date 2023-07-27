<div class="form-container_cal">
    <h2>Сalendar time and date</h2>
    <form action="/booking/index/" method="get">
        <div class="form-group">
            <label for="date">data:</label>
            <input type="date" value="<?= $date ?>" id="date" name="date">
        </div>
        <div class="form-group">
            <input type="submit" value="Show hours">
        </div>
    </form>
</div>
<div class="">
    <?php for($i=0; $i < 24; $i++){?>
        <label>
            <?= $i ?>
            <input type="checkbox">
        </label>
    <?php } ?>
</div>