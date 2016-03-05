<?= $this->user->avatar($email, $author) ?>

<p class="activity-title">
    <?= e('%s updated a subtask for the task %s',
            $this->text->e($author),
            $this->url->link(t('#%d', $task['id']), 'task', 'show', array('task_id' => $task['id'], 'project_id' => $task['project_id']))
        ) ?>
</p>
<div class="activity-description">
    <p><em><?= $this->text->e($task['title']) ?></em></p>

    <ul>
        <li>
            <?= $this->text->e($subtask['title']) ?> (<strong><?= $this->text->e($subtask['status_name']) ?></strong>)
        </li>
        <li>
            <?php if ($subtask['username']): ?>
                <?= t('Assigned to %s with an estimate of %s/%sh', $subtask['name'] ?: $subtask['username'], $subtask['time_spent'], $subtask['time_estimated']) ?>
            <?php else: ?>
                <?= t('Not assigned, estimate of %sh', $subtask['time_estimated']) ?>
            <?php endif ?>
        </li>
    </ul>
</div>
