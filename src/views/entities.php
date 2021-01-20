  
<?php 

include_once "bootstrap.php";

// Helper functions
function redirect_to_root(){
    header("Location: " . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
}

// Delete product
if(isset($_GET['delete'])){
    $name = $entityManager->find('Employer', $_GET['delete']);
    $entityManager->remove($name);
    $entityManager->flush();
    redirect_to_root();
}



$name = $entityManager->find('Models\Employer', 3); // jei naudojame namespaceus
$name !== NULL ? print $name->getId() . ' ' . $name->getName() : '';
print("</pre><hr>");

// $products = $entityManager->getRepository('Models\Employer')->findBy(array('name' => 'Batai'));
// $products[0] !== NULL ? print $products[0]->getId() . ' ' . $products[0]->getName() : '';
// print("</pre><hr>");


// $name = $entityManager->getRepository('Employer')->findBy(array('name' => '?'));
// print("<table>");
// foreach($name as $p)
//     print("<tr>" 
//             . "<td>" . $p->getId()  . "</td>" 
//             . "<td>" . $p->getName() . "</td>" 
//             . "<td><a href=\"?delete={$p->getId()}\">DELETE</a></td>" 
//         . "</tr>");
// print("</table>"); 
// print("</pre><hr>");

// $products = $entityManager->getRepository('Employer')->findBy(array('name' => '?'), array('id' => 'DESC'));
// print("<table>");
// foreach($nane as $p)
//     print("<tr>" 
//             . "<td>" . $p->getId()  . "</td>" 
//             . "<td>" . $p->getName() . "</td>" 
//             . "<td><a href=\"?delete={$p->getId()}\">DELETE</a></td>" 
//         . "</tr>");
// print("</table>"); 
// print("</pre><hr>");

print("<pre>Find all Employer: " . "<br>");
$name = $entityManager->getRepository('Models\Employer')->findAll();
print("<table>");
foreach($name as $p)
    print("<tr>" 
            . "<td>" . $p->getId()  . "</td>" 
            . "<td>" . $p->getName() . "</td>" 
            . "<td><a href=\"?delete={$p->getId()}\">DELETE</a>☢️</td>" 
        . "</tr>");
print("</table>"); 
print("</pre><hr>");

// if(isset($_GET['updatable'])){
//     $product = $entityManager->find('Product', $_GET['updatable']);
//     print("<pre>Update Product: </pre>");
//     print("
//         <form action=\"\" method=\"POST\">
//             <input type=\"hidden\" name=\"update_id\" value=\"{$product->getId()}\">
//             <label for=\"name\">Product name: </label><br>
//             <input type=\"text\" name=\"update_name\" value=\"{$product->getName()}\"><br>
//             <input type=\"submit\" value=\"Submit\">
//         </form>
//     ");
//     print("<hr>");
// }


?>
<!-- <form action="" method="GET">
  <label for="name">Product name: </label><br>
  <input type="text" name="name" value="Doe"><br>
  <input type="submit" value="Submit">
</form>  -->
