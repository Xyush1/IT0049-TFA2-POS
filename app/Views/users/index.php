<?= view('templates/header', ['title' => $title]) ?>

<main class="container">
    <h1>User Accounts</h1>

    <p>This page displays the user and staff records retrieved from the MySQL database.</p>

    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Date Created</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['full_name']) ?></td>
                    <td><?= esc($user['created_at']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>

<?= view('templates/footer') ?>