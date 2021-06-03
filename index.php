<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-badwords</title>
</head>
<body>
  <?php 
    $bandit = $_GET['bandit'];
    $paragrafo = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, tempora eius placeat deleniti asperiores voluptate, explicabo dignissimos voluptatum quo quam dicta labore ex ipsam ab eligendi temporibus, optio beatae! Velit!
    Perspiciatis rem officiis, recusandae doloremque eveniet aspernatur iusto quia? Esse, reprehenderit ipsam ad quis numquam omnis sint exercitationem incidunt, in dignissimos rem recusandae iure aliquam, ex ab asperiores similique vero.
    A iusto soluta dicta assumenda nulla magni eos cupiditate officia, rem dolorem, iure fuga, enim autem optio sit ullam asperiores perspiciatis. Expedita earum aliquid enim beatae ipsam ad soluta voluptas!
    Nam dicta, pariatur corporis rerum eligendi laborum eum, officiis distinctio repudiandae saepe sint in quibusdam corrupti id, rem esse voluptas officia tempora nulla ducimus libero eveniet! Est deleniti aperiam odio?
    Blanditiis voluptatem corporis quos! Corporis architecto iure hic vel veritatis quo? Dolorum, blanditiis molestias quaerat hic similique veritatis placeat architecto ipsam nobis quis corrupti debitis explicabo pariatur maxime doloribus nemo?
    Laboriosam ab assumenda animi exercitationem consequatur explicabo voluptatum officiis aut nobis inventore, quibusdam expedita reiciendis laudantium iusto deleniti possimus. Unde reprehenderit repudiandae aperiam eaque modi nostrum maxime inventore, ea et.
    Animi tempora minima modi eveniet esse optio sint, voluptates odit libero magni quis et error laudantium excepturi magnam ratione facere quaerat dolorum dicta reprehenderit explicabo iste culpa! Quidem, sint necessitatibus.
    In adipisci ipsa, repellat ad velit iure quibusdam, sed maiores magni sit incidunt explicabo exercitationem illo cum repellendus aspernatur deleniti ducimus culpa, quisquam eos? Doloribus quibusdam placeat cumque nam architecto.
    Laborum ipsam tempore, aliquam fugit porro modi natus accusamus veritatis harum. Corrupti vel optio dolorum. Repellendus assumenda dolorem in modi illo rerum, autem tenetur maxime voluptas! Dolore deleniti odio rerum.
    Eligendi aut officiis dolore obcaecati fuga, quidem impedit! Maxime tempore corporis beatae consequuntur quisquam numquam dolores, sed aspernatur eius quae harum, voluptatem perspiciatis optio veniam similique blanditiis mollitia, ipsam quibusdam?
    Ullam earum nesciunt odio laudantium suscipit nihil perferendis voluptatibus tempore impedit alias? Nobis, consectetur corrupti! Voluptatum, repellendus quasi? Voluptas ea impedit ipsa repellat voluptate quis quod placeat similique, alias esse.
    Beatae temporibus libero, quis maiores aut dolorem ut sequi iure fugiat inventore molestiae quae consequuntur repudiandae id saepe exercitationem nobis, eaque architecto voluptatum nesciunt vitae, culpa in labore quas. Repudiandae!
    Porro perferendis quae totam animi nobis tenetur quaerat maxime magni omnis doloribus natus qui, corrupti dolore obcaecati, sunt assumenda excepturi voluptatem aliquid fuga mollitia modi! Provident illum numquam similique sunt.
    Soluta ipsam magni, odio libero veritatis reprehenderit, dicta porro suscipit necessitatibus, dolorem aliquam! Quaerat dicta, earum excepturi rerum mollitia quos ipsum accusamus temporibus et blanditiis repudiandae id nisi sequi totam!
    Quia eos illo quam quidem similique repellat adipisci, quo impedit pariatur, voluptates ad, aperiam mollitia? Eaque accusantium esse facilis placeat expedita! Fugiat ipsam quae veniam placeat quam ratione tenetur repellat.
    Blanditiis eum atque suscipit, minima at corporis repudiandae nobis dignissimos perspiciatis modi, enim, id quae repellendus reiciendis fugit. Molestiae accusamus asperiores quam libero placeat porro laborum. A facilis reiciendis debitis.
    Eum, tenetur asperiores aliquid cum consequatur molestiae quas soluta minima possimus itaque ad sequi incidunt error rem minus porro, mollitia, magni est! Laborum quo sed mollitia ipsa unde voluptates facilis.
    Animi, deserunt sapiente tempora ab minima similique vero eum quasi accusamus rem praesentium impedit facere sed corrupti fugit pariatur magni quos nulla illum ratione. Repudiandae aspernatur dicta voluptates expedita mollitia.
    Dolores odio commodi omnis quo eaque recusandae. Iure illo ad est ea placeat facere, nostrum possimus. Libero cumque minima dignissimos perferendis incidunt ratione eligendi vero. Sed repellendus veritatis ipsam aut?
    Nulla fugit eveniet saepe minus repellat minima possimus quidem! Odit, commodi recusandae omnis totam tenetur nobis placeat distinctio eligendi ratione? Error aliquam odio tempora saepe facilis ratione iusto magni ea.';
  ?>
  

  <p>
    <?php echo $paragrafo ?>
  </p>
  
  <?php 
    echo str_replace("$bandit", "***", "$paragrafo");
  ?>
  <h1>
    Il paragrafo é lungo: 
    <?php 
      echo strlen($paragrafo);
    ?>
  </h1>


</body>
</html>