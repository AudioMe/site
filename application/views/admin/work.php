<form action="/adminSave/work" onsubmit="return validWork()" method="post">

    <table class="table">
        <?php
        if (isset($work)) {
            ?>
            <input type="hidden" name="work_id" value="<?php echo $work->id; ?>"/>
            <tr>
                <td><input type="text" id="name_val" class="input100" value="<?php echo $work->name; ?>" name="name">
                </td>
                <td style="text-align: right">
                </td>
            </tr>
            <tr>
                <td><input type="submit" class="btn btn-primary" value="Сохранить">
                    <a href="/admin/works" class="btn btn-info">Назад</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</form>

<script type="text/javascript">
    function validWork() {
        var name = jQuery('#name_val').val();
        if (name.length <= 2) {
            alert('Слишком которкое название работы');
            return false;
        }
        return true;
    }
</script>