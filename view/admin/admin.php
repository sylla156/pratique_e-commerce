<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "../../src/model/_admin.php";
if (isset($_SESSION['admin'])) {
?>
   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis totam quidem illum aspernatur vero vel porro ipsum autem ad quia pariatur quas dolores voluptatibus, voluptas eius saepe? Illo, officiis neque!
   Consequuntur ipsam optio veritatis repellat nihil non similique consectetur quo maiores id saepe deleniti laboriosam earum odio possimus voluptatum, ducimus esse molestiae tenetur harum nesciunt ea quaerat. Eos, modi maxime.
   Nobis, quas doloremque neque, ullam atque accusantium dicta ipsa nulla quae velit consectetur architecto odio optio! Libero tempora commodi autem ipsum, saepe quas quae eius pariatur itaque iste fugiat quibusdam!
   Perspiciatis numquam ea sapiente consequatur optio accusantium id nesciunt maxime porro vel ipsa, corrupti doloribus officia excepturi sit aliquam officiis ratione obcaecati amet atque suscipit dolores illum fugit laboriosam. Vitae!
   Vitae debitis iure minima deleniti, praesentium cum fugit architecto accusantium pariatur ratione alias perferendis ex nobis recusandae voluptas explicabo, expedita aliquid quas sit nihil eveniet dolores distinctio culpa! Molestias, odit.
   Harum autem minima blanditiis. Maxime culpa porro voluptate laboriosam hic rerum vero incidunt sunt? Et ratione veritatis, recusandae illum similique laborum numquam doloremque saepe assumenda excepturi expedita minima dignissimos ullam!
   Consequuntur quia sed consequatur velit enim ea iusto dolore eum sequi neque, quam et autem consectetur, eius vel optio quis praesentium dolorem excepturi. Eaque facilis, ex quae placeat optio aspernatur.
   Labore officia ab soluta, ducimus suscipit deserunt. Delectus ad corrupti dicta cum quis voluptates unde enim nobis modi ipsa autem error quaerat totam temporibus distinctio, et aspernatur labore illum ut?
   Error sed debitis placeat minima et obcaecati aperiam molestias tempore repudiandae quasi eligendi tempora itaque, laudantium hic. Eligendi, dicta doloribus tempora molestias maxime, quae assumenda porro eveniet est cupiditate fugit!
   Iure, dolorum saepe at consequatur veniam hic aperiam quam eos, numquam eligendi dignissimos harum vero dicta. Natus, error voluptatibus incidunt nulla quia sed temporibus suscipit non mollitia, reprehenderit deserunt dolor!
<?php
} else {
    echo "<script>location.pathname = '/error'</script>";
}
