<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [
            "home" => [
                "text"  => t("Home"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("Startsida med me-innehåll"),
                "mark-if-parent" => true,
            ],

            "report" => [
                "text"  => t("Report"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("About"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],
            "tasks" => [
                "text"  => t("Tasks"),
                "url"   => "#",
                "title" => "Tasks",
                "submenu" => [
                    "items" => [
                        "grid" => [
                            "text"  => t("Grid"),
                            "url"   => $this->di->get("url")->create("grid"),
                            "title" => t("Vertical Grid")
                        ],
                        "typography" => [
                            "text"  => t("Typography"),
                            "url"   => $this->di->get("url")->create("typography"),
                            "title" => t("Typoigraphic Horizontal Grid")
                        ],
                        "tema" => [
                            "text"  => t("Themes"),
                            "url"   => $this->di->get("url")->create("teman"),
                            "title" => t("Teman"),
                            "mark-if-parent" => true,
                        ],
                        "blog" => [
                            "text"  => t("Blog"),
                            "url"   => $this->di->get("url")->create("blogg"),
                            "title" => t("Blog"),
                            "mark-if-parent" => true,
                        ],
                        "images" => [
                            "text"  => t("Images"),
                            "url"   => $this->di->get("url")->create("images"),
                            "title" => t("Images"),
                            "mark-if-parent" => true,
                        ],
                        "designElements" => [
                            "text"  => t("Design Elements"),
                            "url"   => $this->di->get("url")->create("design-element"),
                            "title" => t("Design Elements"),
                        ],
                        "designPrinciples" => [
                            "text"  => t("Design Principles"),
                            "url"   => $this->di->get("url")->create("design-principles"),
                            "title" => t("Design Principles"),
                        ],
                        "analysis" => [
                            "text"  => t("Analysis"),
                            "url"   => $this->di->get("url")->create("analysis"),
                            "title" => t("Analysis from kmoms"),
                            "mark-if-parent" => true,
                        ],
                    ],
                ],
            ],
            "theme-selector" => [
                "text"  => t("Theme-Selector"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Theme-selector"),
            ],
        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [
            "home" => [
                "text"  => t("Home"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("Startsida med me-innehåll"),
                "mark-if-parent" => true,
            ],

            "report" => [
                "text"  => t("Report"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("About"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],

            "tasks" => [
                "text"  => t("Tasks"),
                "url"   => "#",
                "title" => "Tasks",
                "submenu" => [
                    "items" => [
                        "grid" => [
                            "text"  => t("Grid"),
                            "url"   => $this->di->get("url")->create("grid"),
                            "title" => t("Vertical Grid")
                        ],

                        "typography" => [
                            "text"  => t("Typography"),
                            "url"   => $this->di->get("url")->create("typography"),
                            "title" => t("Typoigraphic Horizontal Grid")
                        ],

                        "tema" => [
                            "text"  => t("Themes"),
                            "url"   => $this->di->get("url")->create("teman"),
                            "title" => t("Teman"),
                            "mark-if-parent" => true,
                        ],

                        "blog" => [
                            "text"  => t("Blog"),
                            "url"   => $this->di->get("url")->create("blogg"),
                            "title" => t("Blog"),
                            "mark-if-parent" => true,
                        ],

                        "images" => [
                            "text"  => t("Images"),
                            "url"   => $this->di->get("url")->create("images"),
                            "title" => t("Images"),
                            "mark-if-parent" => true,
                        ],

                        "designElements" => [
                            "text"  => t("Design Elements"),
                            "url"   => $this->di->get("url")->create("design-element"),
                            "title" => t("Design Elements"),
                        ],

                        "designPrinciples" => [
                            "text"  => t("Design Principles"),
                            "url"   => $this->di->get("url")->create("design-principles"),
                            "title" => t("Design Principles"),
                        ],

                        "analysis" => [
                            "text"  => t("Analysis"),
                            "url"   => $this->di->get("url")->create("analysis"),
                            "title" => t("Analysis from kmoms"),
                            "mark-if-parent" => true,
                        ],
                    ],
                ],
            ],
            "theme-selector" => [
                "text"  => t("Theme-Selector"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Theme-selector"),
            ],
        ],
    ],


    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
