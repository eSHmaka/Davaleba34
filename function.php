<?php
  $topicCards = [
    [
      "img" => "./assets/topics/1.png",
      "title" => "Lingerie",
      "button" => "View More",
    ],
    [
      "img" => "./assets/topics/2.png",
      "title" => "Spring",
      "button" => "View More",
    ],
    [
      "img" => "./assets/topics/3.png",
      "title" => "Yoga",
      "button" => "View More",
    ],
    [
      "img" => "./assets/topics/4.png",
      "title" => "Glow",
      "button" => "View More",
    ],
    [
      "img" => "./assets/topics/5.png",
      "title" => "Ensembles",
      "button" => "View More",
    ],
    [
      "img" => "./assets/topics/6.png",
      "title" => "Skin Care",
      "button" => "View More",
    ],
   
  ];

  function cardInteration($array) {
    foreach ($array as $Card) {
      echo '
      <div class="topic-card">
  
        <div class="topic-img">
          <img src=" ' . $Card["img"] . ' " alt="' . $Card["title" ] . '" />
        </div>
      
        <h3> ' . $Card["title" ] . '</h3>
      
        <button> ' . $Card["button" ] . '</button>
      </div>
      ';
    }
  }
  


  
$headerNav = [
  [
    "class" => "hover-nav",
    "title" => "Fashion",
    "list" => [
      [
        "name1" => "fashion1",
        "name2" => "fashion2",
      ]
    ],
  ],
  [
    "class" => "hover-nav hover-nav1",
    "title" => "Spiritual",
    "list" => [ 
      [
        "name1" => "spiritual1",
        "name2" => "spiritual2",
      ]
    ],
  ],
  [
    "class" => "hover-nav hover-nav1",
    "title" => "Lifestyle",
    "list" => [
      [
        "name1" => "lifestyle1",
        "name2" => "lifestyle2",
      ]
    ],
  ],
  [
    "class" => "hover-nav hover-nav1",
    "title" => "Mental Health",
    "list" => [
      [
        "name1" => "mentalhealth1",
        "name2" => "mentalhealth2",
      ]
    ],
  ],
  [
    "class" => "hover-nav",
    "title" => "Contact Us",
    "list" => [
      [
        "name1" => "contactus1",
        "name2" => "contactus2",
      ]
    ],
  ],

];



$container3 =[
  [ 
    "class" => "img3",
    "button1" => "LIFESTYLE",
    "img1" => "./assets/malloryreyn.png",
    "p1" => "Mallory Reyn",
    "p2" => "April 14th, 2023",
    "h4" => "10 Things to help you with social stress.",
    "p3" => "Lorem ipsum dolor sit amet, consectetur Pellentesque sit amet
              sapien fringilla, mattis mattis tellus. Nullam quis imperdiet
              augue. Vestibulum.",
    "img2" => "./assets/arrow-small-right.png",
    "button2" => "READ MORE",      
  ],
  [ 
    "class" => "img4",
    "button1" => "SUMMER",
    "img1" => "./assets/malloryreyn.png",
    "p1" => "Mallory Reyn",
    "p2" => "April 14th, 2023",
    "h4" => "The summer 2023 lineup is finally here.",
    "p3" => "Lorem ipsum dolor sit amet, consectetur Pellentesque sit amet
              sapien fringilla, mattis mattis tellus. Nullam quis imperdiet
              augue. Vestibulum.",
    "img2" => "./assets/arrow-small-right.png",
    "button2" => "READ MORE",      
  ],
];

function card($cont3){
  foreach ($cont3 as $box) {
    echo '
    <div class="box">
    <div class="' . $box["class"] . '">
      <button>' . $box["button1"] . '</button>
    </div>
  
    <div class="line3">
      <div class="reyn2">
        <div class="malloryreyn">
          <img src=" ' . $box["img1"] . ' " alt="' . $box["button1" ] . ' " /> 
        </div>
        <p>' . $box["p1"] . '</p>
      </div>
  
      <div class="space2">
        <p>' . $box["p2"] . '</p>
      </div>
    </div>
  
    <div class="line4">
      <h4>' . $box["h4"] . '</h4>
      <p class="main-p"> ' . $box["p3"] . ' </p>
    </div>
  
    <div class="arrow-flex1">
      <div class="arrow">
        <img src=" ' . $box["img2"] . ' " />
      </div>
      <a href="#"> ' . $box["button2"] . '</a>
    </div>
  </div>
    ';
  }
}

$container4 =[
  [ 
    "class" => "img5",
    "button1" => "SUMMER",
    "img1" => "./assets/malloryreyn.png",
    "p1" => "Mallory Reyn",
    "p2" => "April 14th, 2023",
    "h4" => "5 Reasons to avoid shopping on saturdays",
    "p3" => "Lorem ipsum dolor sit amet, consectetur Pellentesque sit amet
            sapien fringilla, mattis mattis tellus. Nullam quis imperdiet
            augue. Vestibulum.",
    "img2" => "./assets/arrow-small-right.png",
    "button2" => "READ MORE",    
    
  ],
  [ 
    "class" => "img6",
    "button1" => "ENSEMBLES",
    "img1" => "./assets/malloryreyn.png",
    "p1" => "Mallory Reyn",
    "p2" => "April 14th, 2023",
    "h4" => "10 Brands that remained faithful to your classy look.",
    "p3" => "Lorem ipsum dolor sit amet, consectetur Pellentesque sit amet
            sapien fringilla, mattis mattis tellus. Nullam quis imperdiet
            augue. Vestibulum.",
    "img2" => "./assets/arrow-small-right.png",
    "button2" => "READ MORE",    
    
  ],
  [ 
    "class" => "img7",
    "button1" => "MENTAL HEALTH",
    "img1" => "./assets/malloryreyn.png",
    "p1" => "Mallory Reyn",
    "p2" => "April 14th, 2023",
    "h4" => "Mental health tips to cope with stress.",
    "p3" => "Lorem ipsum dolor sit amet, consectetur Pellentesque sit amet
            sapien fringilla, mattis mattis tellus. Nullam quis imperdiet
            augue. Vestibulum.",
    "img2" => "./assets/arrow-small-right.png",
    "button2" => "READ MORE",    
    
  ],  
];

function card2($cont4) {
  foreach ($cont4 as $box2) {
    echo '
    
    <div class="box2">
    <div class=" ' . $box2["class"] . ' ">
      <button> ' . $box2["button1"] . ' </button>
    </div>
    <div class="box3">
      <div class="line5">
        <div class="reyn2">
          <div class="malloryreyn">
            <img src="'. $box2["img1"] .'" />
          </div>
          <p>'. $box2["p1"] .'</p>
        </div>
    
        <div class="space2">
          <p>'. $box2["p2"] .'</p>
        </div>
      </div>
    
      <div class="line6">
        <h4>'. $box2["h4"] .'</h4>
        <p class="main-p">'. $box2["p1"] .'</p>
      </div>
    
      <div class="arrow-flex1">
        <div class="arrow">
          <img src="'. $box2["img2"] .'" />
        </div>
        <a href="#"> ' . $box2["button2"] . ' </a>
      </div>
    </div>
    </div>  
  ';
  }
}













