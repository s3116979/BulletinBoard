<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <h2>Menu:</h2>
        </li>

        <li><?php echo $this->Html->link(__('Edit User', true), array('action' => 'edit', $user['User']['user_id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Delete User', true), array('action' => 'delete', $user['User']['user_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['user_id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Home', true), array('controller' => 'pages', 'action' => 'display')); ?></li>
        <li><?php echo $this->Html->link(__('Back', true), 'javascript:window.history.back()'); ?> </li>
        <?php if ($this->Session->read('Auth.User')) {

            echo "<li>";
            echo $this->Html->link(__('Edit Account', true), array('controller' => 'users', 'action' => 'edit', (AuthComponent::user('user_id'))));
            echo "</li>";

        } ?>
    </ul>




</div>
<!-- /#sidebar-wrapper -->