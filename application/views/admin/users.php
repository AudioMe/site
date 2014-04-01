<a class="btn btn-danger" href="/admin/addUser">Добавить администратора</a>
<table class="table">
    <?php
    if (isset($users))
        foreach ($users as $user) {
            $roles = new Model_RolesUsers();
            $all_roles = $roles->where('user_id', '=', $user->id)->find_all();
            $is_admin = false;
            foreach ($all_roles as $r) {
                if ($r->role_id == 2) {
                    $is_admin = true;
                }
            }
            if ($is_admin && $user->username != "root") {
                ?>
                <tr>
                    <td><a href="/admin/user/<?php echo $user->id; ?>"><?php echo $user->username; ?></a></td>
                    <td style="text-align: right">
                        <?php echo $user->email; ?>
                    </td>
                    <td><a href="/adminDelete/user/<?php echo $user->id; ?>"
                           class="remove_user btn btn-danger">Удалить</a></td>
                </tr>
            <?php
            }
        }
    ?>
</table>

<script type="text/javascript">
    jQuery(function () {
        jQuery('.remove_user').click(function () {
            var msg = prompt('Если вы хотите удалить данного администратора, введите "DELETE"')
            if (msg == "DELETE") {
                return true;
            } else {
                return false;
            }
        })
    });
</script>