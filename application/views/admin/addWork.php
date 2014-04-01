<form action="/adminSave/addWork" onsubmit="return validWork()" method="post">

    <table class="table">
        <?php
        ?>
        <tr>
            <td><input type="text" id="name_val" class="input100" value="" name="name"></td>
            <td style="text-align: right">
            </td>
        </tr>
        <tr>
            <td><input type="submit" class="btn btn-primary" value="Добавить"></td>
        </tr>
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