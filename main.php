<?php
        class mainTwo extends wxFrame {
                function __construct() {
                        parent::__construct(null, null, "Hello world! #1", wxDefaultPosition, new wxSize(500, 500));
                }
        }

        class mainOne extends wxApp {
                function OnInit() {
                        $mainTwo = new mainTwo();
                        $mainTwo -> Show();

                        return 0;
                }
        }

        $mainOne = new mainOne();
        wxApp::SetInstance($mainOne);
        wxEntry();
?>
