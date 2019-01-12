<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="theatre">
    <div class="container">
        <div class="personal-inf">
            <div class="row">
                <div class="col-md-4">
                    <figure class="spectacle">
                        <img src="/assets/images/original/<?php echo $spectacle['image']; ?>" class="img-responsive" style="border-radius: 4px;">
                    </figure>
                </div>
                <div class="col-md-8">
                    <div class="personal-inf-block">
                        <h1 style="margin: 10px 0;"><?php echo $spectacle['title']; ?></h1>
                        <hr>
                        <div style="margin: 10px 0 20px 0;">
                            <b><?php echo $spectacle['author']; ?></b> | <?php echo $spectacle['type']; ?> | <b><?php echo $spectacle['duration']; ?></b>
                        </div>
                        <?php echo $spectacle['description']; ?>
                        <div style="margin-bottom: 100px;"></div>
                        <center style="margin-bottom: 100px;">
                            <?php if ($spectacleActors): ?>
                                <p>Ролі та актори</p>
                            <?php endif; ?>
                            <table>
                                <tbody>
                                    <?php foreach ($spectacleActors as $actor): ?>
                                        <tr>
                                            <td align="right"><?php echo $actor['role']; ?></td>
                                            <td style="padding-left: 20px;">
                                                <a class="actor-link"
                                                    href="/worker/<?php echo $actor['link']; ?>">
                                                    <?php echo $actor['name']; ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <table style="margin: 50px 0 50px 0;">
                                <tbody>
                                    <?php foreach ($tickets as $ticket): ?>
                                        <tr style="border: 1px solid #5D0808;">
                                            <td class="tickets"><?php echo $ticket['beginning']; ?></td>
                                            <td>
                                                <a href="http://tickets.dramtheater.cv.ua/ua/playbill/" target="_blank" class="buy-tickets" style="padding: 5px 20px 5px 20px;color: white;float: right;text-decoration: none;">Придбати квитки</a>
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