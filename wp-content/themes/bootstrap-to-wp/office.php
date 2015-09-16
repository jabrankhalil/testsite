<?php

$newyork = array(
    'heading' => 'New York Office',
    'phone'   => '+1 (212) 989 0075',
    'address' => '135 West 26th Street, Suite 7B, New York<br />NY10001 USA',
    'email'   => array( 'infousa@appointmentgroup.com', 'infousa@appointmentgroup.com' ),
);

$los_angeles = array(
    'heading' => 'Los Angeles Office',
    'phone'   => '+1 (424) 248 2600',
    'address' => '10940 Wilshire Boulevard, Suite 1240, Los Angeles<br />CA 90024 USA',
    'email'   => array( 'infousa@appointmentgroup.com', 'infousa@appointmentgroup.com' ),
);

$atlanta = array(
    'heading' => 'Atlanta Office',
    'phone'   => '+1 (770) 792 0705',
    'address' => 'Suite 1500 – 400 Galleria Parkway<br />Atlanta GA 30339, USA',
    'email'   => array( 'infousa@appointmentgroup.com', 'infousa@appointmentgroup.com' ),
);

$melbourne = array(
    'heading' => 'Melbourne Office',
    'phone'   => '+61 (0)3 8888 8900',
    'fax'     => '',
    'address' => 'Suite 1208, 9 Yarra Street, South Yarra<br />VIC 3141 Australia',
    'email'   => array( 'melbourne@appointmentgroup.com', 'infoau@appointmentgroup.com' ),
);

$sydney = array(
    'heading' => 'Sydney Office',
    'phone'   => '+61 (0)2 8823 0600',
    'address' => 'Suite 406, Level 4, 46 Kippax Street, Surry Hills<br />2010 NSW Australia',
    'email'   => array( 'infoau@appointmentgroup.com', 'infoau@appointmentgroup.com' ),
);

$london = array(
    'heading' => 'London Office',
    'phone'   => '+44 (0)20 8960 1600',
    'address' => 'The Linen House, 253 Kilburn Lane, London<br>W10 4BQ UK',
    'email'   => array( 'info@appointmentgroup.com', 'info@appointmentgroup.com' ),
);

$manchester = array(
    'heading' => 'Manchester Office',
    'phone'   => '+44 (0)161 499 6090',
    'address' => '2nd Floor, Margolis Building, 37 Turner Street, Manchester<br />M4 1DW UK',
    'email'   => array( 'info@appointmentgroup.com', 'info@appointmentgroup.com' ),
);

$sg_office = array(
    'heading' => 'Singapore Office',
    'phone'   => '+65 0000 3086',
    'address' => '323A Beach Rd<br/>Singapore',
    'email'   => array( 'infosg@appointmentgroup.com', 'infosg@appointmentgroup.com' ),
);

//Countries
$us = array(
    'overseas_heading' => 'TAG USA',
    'address_heading'  => 'Contact TAG USA',
    'offices'          => compact('newyork', 'los_angeles', 'atlanta'),
);

$au = array(
    'overseas_heading' => 'TAG Australia',
    'address_heading'  => 'Contact TAG Australia',
    'offices'          => compact('melbourne', 'sydney'),
);

$uk = array(
    'overseas_heading' => 'TAG UK',
    'address_heading'  => 'Contact TAG UK',
    'offices'          => compact('london', 'manchester'),
);

$sg = array(
    'overseas_heading' => 'TAG Singapore',
    'address_heading'  => 'Contact TAG Singapore',
    'offices'          => compact('sg_office'),
);

$locations = compact('uk', 'au', 'us');
?>

<table cellpadding="5" width="100%">
    <tr>
        <?php foreach($locations as $location): ?>
        <td>
            <h3><?php echo $location["overseas_heading"];?> </h3>
            <h6><?php echo $location["address_heading"];?></h6>

            <h1>Offices</h1>

            <ul>
                <?php foreach($location["offices"] as $office):?>
                    <li>
                        <p>
                            <?php echo $office["heading"];?> <br/>
                            <b><?php echo $office["phone"];?></b>
                        </p>
                    </li>
                    <?php foreach($office["email"] as $email):
                        echo $email. str_repeat("*",3);
                    endforeach;







                endforeach;
                endforeach;?>
            </ul>



        </td>
    </tr>
</table>

