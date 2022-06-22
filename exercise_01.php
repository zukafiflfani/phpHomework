<?php
/* 1.	იპოვე შეცდომა კოდში და ჩაასწორე:
  <?php 
    print 'How are you ?';
    print 'I'am fine.';
   ?>
*/
// პასუხი : შეცდომა ხდება როდესაც მეორე პრინში ორჯერ ვიყენებთ ფრჩხილებს უნდაგამოვიყენოთ ასე
print 'I \'am fine';
print "<br/>";
print "<br/>";

/* 2. მაკდონალდსში უკვეთავს: ბიგ მაკი 2ცალი(ერთის ფასი 7ლ), კოკა-კოლა 3ც (ერთის ფასი 2.45)
კარტოფილი ფრი 2ცალი (ერთის ფასი 1.75). ამ შენაძენძე მოქმედებს 7%-იანი ფასდაკლება. 
აღწერეთ კოდი, რომელიც დაინგარიშებს გადასახდელ თანხას.
*/

// count price
function coutnPrice($quantity, $price){
  return $quantity * $price;
} 
// count fullprice
function fucllPrice (...$prices) { // use ellipsis token when defining function
  $fulprc = 0;
  foreach ($prices as $price) {
      $fulprc += $price;
  }
  return $fulprc;
}
// count discount by procent
function discount ($price, $percent){
  
  $discountperc = ($price *  $percent) /100;
  return $price - $discountperc;
  
}
$bigMackPrice = coutnPrice(2, 7);
$cocacolaPrice = coutnPrice(3,2,45);
$free = coutnPrice(2, 1.75);

$orderfullprice = fucllPrice($bigMackPrice, $cocacolaPrice ,$free);

$lastprice = (string)discount ($orderfullprice, 7);
print "მეორეს პასუხი :";
print "$lastprice $";

print "<br/>";
print "<br/>";
/* 3. აღწერთ კოდი, რომელციც ჩაანაცვლებს '{class}' მნიშველობას "dinner"
      მნშველობით სტრინში რომელიც მოცემულია ცვლადში:
      $html = '<span class="{class}">fried fish</span><span class="{class}">fried chicken</span>';
*/
/* პასუხი: ამოცანა კარგად ვერ გავიგე ანუ უბრალოდ უნდა ჩავანაცვლოთ ‘{class}’ მნიშვნელობა ?  ანუ ბრჭყალებთან უნდა იყოს კავშირში 
    მაგრამ ვერ გავიგე უბრალოდ ჩანაცვლება უნდა გავაკეთოთ ? 
*/
$html = '<span class="dinner">fried fish</span><span class="dinner">fried chicken</span>';

/* 4. სწორად შემოსაზღვრეთ არითმეტიკული ოპერატორები,
      ისე რომ მოცემული გამოსახულების მნიშვნელობა უნდა იყოს 6 
      print 2+4 *10/9-2;
*/
/* 
  პასუხი: ჯერ 4*10 = 40  შემდეგ 40 +2 = 42  ცალკე (9-2) = 7  42 /7 = 6 
*/
print "მეოთხის პასხი : ";
print (2+ (4*10))/(9 -2);

print "<br/>";
print "<br/>";
/* 5. შექმენით მასივი, რომელიც ასახავს ქალაქებისა და მასში მცვორებთა რაოდენობას:
    ა. თბილისი 2 000 000
    ბ. რუსთავი 1 000 000
    ც. ქუთაისი 999 000
    დ. ბათუმი 1 4000 000
    ე. თელავი 750 000
*/
$city = array(
  "tbilisi" => 2000000,
  "telavi" => 1000000,
  "rustavi" =>999000,
  "batumi" =>1400000,
  "telavi" =>50000,
);

print "მეოხუთის პასუხი : ";
print_r($city);

print "<br/>";
print "<br/>";
/*
  შექმნილი მასივი დაალაგეთ მოსახლეობის რაოდენობის კლებადობსი მიხედვით რევერსულად.
*/
arsort($city);
print "მეექვსეს პასუხი : ";
print "After sort ";
print_r($city);

print "<br/>";
print "<br/>";
/*
  მოდიფიცირება გაუკეთეთ შექმნილ მასივს ისე რომ თითოეულ ჩანაწერს დაუმატოთ ამ ქალაქებში მცხოვრებ ბავშვთა რაოდენობა:
    ა. თბილისი 2 000 000
    ბ. რუსთავი 1 000 000
    ც. ქუთაისი 999 000
    დ. ბათუმი 1 4000 000
    ე. თელავი 750 000
*/
/*
  პასუხი: თითოულ ჩანაწერს რაოდენობრივად დავუმატოთ თუ ქვე მასივი გავაკეთოთ და ბავშვების რაოდენობა ცალკე იყოს ? 
   ორივე ვარიანტი განვიხილე. 
*/
$babyNumberCity = array(
  "tbilisi" => 10985,
  "telavi" =>  5999,
  "rustavi" => 4005,
  "batumi" => 7210,
  "telavi" =>5789,
);
foreach ($city as $key => $value){
  $value = [$value, $babyNumberCity[$key]];
  $city[$key] = $value;
}

print "<pre>";
print "ვარიანტი პირველი როდესაც value მასივად ვაქცევთ და ერთდორულად შეიცავს მცხოვრებთა რაოდენობას და მავშვთა რაოდენობას <br/>";
print_r($city);
print "</pre>";

//ვარიანტი მეორე ამისთვის იგივე მასივი შევქმენი რადგან წინა გამოვიყენე ამ შემთხვევაში უბრალოდ დავუმატე ბავშთა რაოდენობა მვცოვრებთა რაოდენობას ";

$city = array(
  "tbilisi" => 2000000,
  "telavi" => 1000000,
  "rustavi" =>999000,
  "batumi" =>1400000,
  "telavi" =>50000,
);
foreach ($city as $key => $value){
  $value = $value + $babyNumberCity[$key];
  $city[$key] = $value;
}
print "<pre>";
print "ვარიანტი მეორე ამისთვის იგივე მასივი შევქმენი რადგან წინა გამოვიყენე ამ შემთხვევაში უბრალოდ დავუმატე ბავშთა რაოდენობა მვცოვრებთა რაოდენობას <br/>";
print_r($city);
print "</pre>";

?>
