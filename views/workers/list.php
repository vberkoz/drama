<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="theatre">
	<div class="title">
		<h1>Працівники</h1>
	</div>
	<div class="menu-line">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav>
						<ul>
                            <?php foreach ($departments as $department): ?>
                                <li><a href="<?php echo $department['link']; ?>" <?php echo (strpos($_SERVER['REQUEST_URI'], $department['link']))?'class="active"':null?>><?php echo $department['title']; ?></a></li>
                            <?php endforeach; ?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
    </div>

    <div class="team-list">
        <?php foreach ($departmentWorkers as $worker): ?>
            <a href="/worker/<?php echo $worker['link'];?>">
                <figure class="team-li">
                    <img src="/template/images/original/<?php echo $worker['image']; ?>" alt="<?php echo $worker['image']; ?>">
                    <p><?php echo $worker['name'];?></p>
                    <span><?php echo $worker['position'];?></span>
                </figure>
            </a>
        <?php endforeach; ?>
    </div>
    <div style="margin-bottom: 100px;"></div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>