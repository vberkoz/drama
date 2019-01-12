<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="theatre">
    <div class="container">
        <div class="personal-inf">
            <div class="row">
                <div class="col-md-4">
                    <figure class="team">
                        <img src="/assets/images/original/<?php echo $worker['image'] ?>" alt="<?php echo $worker['image'] ?>">
                    </figure>
                </div>

                <div class="col-md-8">
                    <div class="personal-inf-block">
                        <h1 style="margin: 10px 0;"><?php echo $worker['name'] ?></h1>
                        <hr>
                        <div style="margin: 10px 0 20px 0;">
                            <b><?php echo $worker['position'] ?></b>
                        </div>
                        <?php echo $worker['merit']?>
                        <div style="margin-bottom: 100px;"></div>
                        <center style="margin-bottom: 100px;">
                            <?php if ($workerSpectacles): ?>
                                <p>Ролі та вистави</p>
                            <?php endif; ?>
                            <table>
                                <tbody>
                                    <?php foreach ($workerSpectacles as $spectacle): ?>
                                        <tr>
                                            <td align="right"><?php echo $spectacle['role']; ?></td>
                                            <td style="padding-left: 20px;">
                                                <a class="actor-link"
                                                    href="/spectacle/<?php echo $spectacle['link']; ?>">
                                                    <?php echo $spectacle['title']; ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>