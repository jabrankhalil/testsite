<?php
$teams = get_sub_field('teams');

if(empty($teams))
    return;

//Top Two Members
$teams_rows = array_chunk($teams, 4)

?>
<div class="container">
    <div class="row">
        <main class="col-xs-12" role="main">

            <?php foreach($teams_rows as $i => $teams) : ?>

                <div class="row">
                        <?php foreach($teams as $i => $team): ?>
                        <div class="col-md-3">
                            <h4>
                                <img src="<?php echo $team['team_image']; ?>" class="alignleft" alt="<?php echo $team['team_name']; ?>" />
                            </h4>

                            <h5><?php echo $team['team_name']; ?></h5>
                            <p><em><?php echo $team['team_title']; ?></em></p>
                            <p>
                                <?php echo $team['team_content']; ?>
                            </p>

                        </div>
                        <?php endforeach; ?>
                </div>
                <div class="spacer"></div>

            <?php endforeach; ?>

        </main>
    </div>
</div>
