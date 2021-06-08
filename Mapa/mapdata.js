var simplemaps_countrymap_mapdata = {
    main_settings: {
        //General settings
        width: "responsive", //'700' or 'responsive'
        background_color: "#FFFFFF",
        background_transparent: "yes",
        border_color: "#ffffff",

        //State defaults
        state_description: "",
        state_color: "#88A4BC",
        state_hover_color: "#3B729F",
        state_url: "",
        border_size: 1.5,
        all_states_inactive: "no",
        all_states_zoomable: "no",

        //Location defaults
        location_description: "",
        location_url: "",
        location_color: "#FF0067",
        location_opacity: 0.8,
        location_hover_opacity: 1,
        location_size: 25,
        location_type: "square",
        location_image_source: "frog.png",
        location_border_color: "#FFFFFF",
        location_border: 2,
        location_hover_border: 2.5,
        all_locations_inactive: "no",
        all_locations_hidden: "no",

        //Label defaults
        label_color: "#d5ddec",
        label_hover_color: "#d5ddec",
        label_size: 22,
        label_font: "Arial",
        hide_labels: "no",
        hide_eastern_labels: "no",

        //Zoom settings
        zoom: "yes",
        manual_zoom: "yes",
        back_image: "no",
        initial_back: "no",
        initial_zoom: "-1",
        initial_zoom_solo: "no",
        region_opacity: 1,
        region_hover_opacity: 0.6,
        zoom_out_incrementally: "no",
        zoom_percentage: 0.99,
        zoom_time: 0.5,

        //Popup settings
        popup_color: "white",
        popup_opacity: 0.9,
        popup_shadow: 1,
        popup_corners: 5,
        popup_font: "12px/1.5 Verdana, Arial, Helvetica, sans-serif",
        popup_nocss: "no",

        //Advanced settings
        div: "map",
        auto_load: "yes",
        url_new_tab: "no",
        images_directory: "default",
        fade_time: 0.1,
        link_text: "",
        popups: "detect",
        state_image_url: "",
        state_image_position: "",
        location_image_url: ""
    },
    state_specific: {
        ROU122: {
            name: "Dolj",
            color: "#ed1b24",
            url: "Mvc/Public/judet/Dolj"
        },
        ROU123: {
            name: "Gorj",
            color: "#ed1b24",
            url: "Mvc/Public/judet/Gorj"
        },
        ROU124: {
            name: "Mehedinti",
            color: "#ed1b24",
            url: "Mvc/Public/judet/Mehedinti"
        },
        ROU126: {
            name: "Olt",
            color: "#ed1b24",
            url: "Mvc/Public/judet/Olt"
        },
        ROU127: {
            name: "Teleorman",
            color: "#ed1b24",
            url: "Mvc/Public/judet/Teleorman"
        },
        ROU128: {
            name: "Bucuresti",
            color: "#b8da9d",
            url: "Mvc/Public/judet/Bucuresti"
        },
        ROU129: {
            name: "Calarasi",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Calarasi"
        },
        ROU130: {
            name: "Dambovita",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Dambovita"
        },
        ROU131: {
            name: "Giurgiu",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Giurgiu"
        },
        ROU132: {
            name: "Ialomita",
            color: "#ed1b24",
            url: "Mvc/Public/judet/Ialomita"
        },
        ROU133: {
            name: "Constanta",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Constanta"
        },
        ROU276: {
            name: "Arad",
            color: "#b8da9d",
            url: "Mvc/Public/judet/Arad"
        },
        ROU277: {
            name: "Bihor",
            color: "#b8da9d",
            url: "Mvc/Public/judet/Bihor"
        },
        ROU278: {
            name: "Caras-Severin",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Caras-Severin"
        },
        ROU280: {
            name: "Timis",
            color: "#b8da9d",
            url: "Mvc/Public/judet/Timis"
        },
        ROU287: {
            name: "Botosani",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Botosani"
        },
        ROU294: {
            name: "Alba",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Alba"
        },
        ROU295: {
            name: "Bistrita-Nasaud",
            color: "#b8da9d",
            url: "Mvc/Public/judet/Bistrita-Nasaud"
        },
        ROU296: {
            name: "Cluj",
            color: "#b8da9d",
            url: "Mvc/Public/judet/Cluj"
        },
        ROU297: {
            name: "Hunedoara",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Hunedoara"
        },
        ROU298: {
            name: "Maramures",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Maramures"
        },
        ROU299: {
            name: "Mures",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Mures"
        },
        ROU300: {
            name: "Salaj",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Salaj"
        },
        ROU301: {
            name: "Satu Mare",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Satu-Mare"
        },
        ROU302: {
            name: "Arges",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Arges"
        },
        ROU303: {
            name: "Sibiu",
            color: "#b8da9d",
            url: "Mvc/Public/judet/Sibiu"
        },
        ROU304: {
            name: "Valcea",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Valcea"
        },
        ROU305: {
            name: "Brasov",
            color: "#b8da9d",
            url: "Mvc/Public/judet/Brasov"
        },
        ROU306: {
            name: "Covasna",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Covasna"
        },
        ROU307: {
            name: "Harghita",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Harghita"
        },
        ROU308: {
            name: "Iasi",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Iasi"
        },
        ROU309: {
            name: "Neamt",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Neamt"
        },
        ROU310: {
            name: "Prahova",
            color: "#b8da9d",
            url: "Mvc/Public/judet/Prahova"
        },
        ROU311: {
            name: "Suceava",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Suceava"
        },
        ROU312: {
            name: "Bacau",
            color: "#ed1b24",
            url: "Mvc/Public/judet/Bacau"
        },
        ROU313: {
            name: "Braila",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Braila"
        },
        ROU314: {
            name: "Buzau",
            color: "#ed1b24",
            url: "Mvc/Public/judet/Buzau"
        },
        ROU315: {
            name: "Galati",
            color: "#ed1b24",
            url: "Mvc/Public/judet/Galati"
        },
        ROU316: {
            name: "Vaslui",
            color: "#ed1b24",
            url: "Mvc/Public/judet/Vaslui"
        },
        ROU317: {
            name: "Vrancea",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Vrancea"
        },
        ROU4844: {
            name: "Ilfov",
            color: "#b8da9d",
            url: "Mvc/Public/judet/Ilfov"
        },
        ROU4847: {
            name: "Tulcea",
            color: "#fff2d8",
            url: "Mvc/Public/judet/Tulcea"
        }
    },
    locations: {},
    labels: {},
    regions: {}
};