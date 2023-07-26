const countries = [
  {
    title: "Malaysia",
    img: "../assets/images/bibleRC/malaysia.jpg",
    locations: [
      {
        id: 0,
        title:
          "班達馬蘭班 <br> Pandamaran Chinese Methodist Church <br> Chi Liung Methodist Center",
        time: "週日Sunday/8:45AM–10:30 AM",
        type: "婦女班/弟兄班",
        duration: "學期採Quarter制，2月-11月",
        address:
          "35647, Lorong Bahagia 3 Taman Chi Liung, Pandamaran, 42000 Pelabuhan Klang",
      },
      {
        id: 1,
        title: "新山異象班",
        time: "週二Tuesday / 7:45PM-9:45PM",
        type: "婦女班/弟兄班",
        duration: "學期採Quarter制，1月-10月",
        address:
          "新山異象教會，9A, Jalan Ru, Taman Kebun Teh, 80250 Johor Bahru Johor Darul Takzim",
      },

      {
        id: 2,
        title: "昔加末早/晚班",
        time: "週四早上 Thursday 10:00 AM –12:00 PM; 週四晚上Thursday 7:30 – 9:30 PM",
        type: "婦女班/弟兄班",
        duration: "學期採Quarter制，1月-10月",
        address:
          "衛斯理樂齡中心/ Wesley Senior Center <br> <blockquote> 200-201 Taman Tan Leng Ann,</blockquote> <blockquote> 85000 Segamat,Johor,Malaysia.",
      },
      {
        id: 3,
        title: "三合港班",
        time: "週五Friday/7:30PM –9:30 PM",
        type: "婦女班/弟兄班",
        duration: "學期採Quarter制，2月-11月",
        address: "1, JLN LIAI SALLEH, 85400 CHAAH, JOHOR",
      },
      {
        id: 4,
        title: "金山園班",
        time: "週三Wednesday/8:00PM –10:00 PM",
        type: "婦女班/弟兄班",
        duration: "學期採Quarter制，1月-10月",
        address: "恩慈长老教会，47A， JALAN IMPIAN EMAS 2， SKUDAI， JOHOR",
      },
      {
        id: 5,
        title: "使命班（槟城）",
        time: "Friday/星期五8:15pm-10:15pm",
        type: null,
        duration: null,
        address: "40， Jalan Lim Lean Teng, 11600 Penang.",
      },
      {
        id: 6,
        title: " 衛理三一堂班",
        time: "Tuesday/星期二 8pm-10pm",
        type: null,
        duration: null,
        address: "185，Pekan Gurney 32010 Sitiawan, Perak",
      },
      {
        id: 7,
        title: "基督福音教会 (基督福音班)",
        time: "星期五晚8：00-10：00",
        type: null,
        duration: null,
        address:
          "CHRIST GOSPEL CHURCH <br> <blockquote> 9254 KAMPUNG SELAMAT,  32000 SETIAWAN, PERAK",
      },
      {
        id: 8,
        title: "吉隆玻浸信教会（城市花园浸信班）",
        time: "星期日 11.00am – 1pm",
        type: null,
        duration: null,
        address:
          "KUALA LUMPUR BAPTIST CHURCH， DESA PARKCITY, <br><blockquote>  9, JALAN RESIDEN UTAMA, DESA PARKCITY,   52200 KUALA LUMPUR.",
      },
      {
        id: 9,
        title: "卫理班台班",
        time: "週四晚 8:00-10:00pm",
        type: null,
        duration: null,
        address:
          "PANTAI REMIS CHINESE METHODIST CHURCH <br> <blockquote> 23A, JALAN PANTAI MAKMUR    2, TAMAN PANTAI MAKMUR,  34900 PANTAI REMIS ,PERAK ",
      },
      {
        id: 10,
        title: "柔彿州笨珍長老樂恩堂（樂恩班）",
        time: "時間：週六下午3:30-5:30pm",
        type: null,
        duration: null,
        address: null,
      },
      {
        id: 11,
        title: "甲洞宣恩堂 （宣恩班）",
        time: " 週五晚上8:30-10:30pm",
        type: null,
        duration: null,
        address: null,
      },
      {
        id: 12,
        title: "東馬網路班",
        time: null,
        type: null,
        duration: null,
        address: null,
      },
    ],
  },
  {
    title: "Malaysia",
    img: "../assets/images/bibleRC/malaysia.jpg",
    locations: [
      {
        id: 0,
        title:
          "班達馬蘭班 <br> Pandamaran Chinese Methodist Church <br> Chi Liung Methodist Center",
        time: "週日Sunday/8:45AM–10:30 AM",
        type: "婦女班/弟兄班",
        duration: "學期採Quarter制，2月-11月",
        address:
          "35647, Lorong Bahagia 3 Taman Chi Liung, Pandamaran, 42000 Pelabuhan Klang",
      },
      {
        id: 1,
        title: "新山異象班",
        time: "週二Tuesday / 7:45PM-9:45PM",
        type: "婦女班/弟兄班",
        duration: "學期採Quarter制，1月-10月",
        address:
          "新山異象教會，9A, Jalan Ru, Taman Kebun Teh, 80250 Johor Bahru Johor Darul Takzim",
      },

      {
        id: 2,
        title: "昔加末早/晚班",
        time: "週四早上 Thursday 10:00 AM –12:00 PM; 週四晚上Thursday 7:30 – 9:30 PM",
        type: "婦女班/弟兄班",
        duration: "學期採Quarter制，1月-10月",
        address:
          "衛斯理樂齡中心/ Wesley Senior Center <br> <blockquote> 200-201 Taman Tan Leng Ann,</blockquote> <blockquote> 85000 Segamat,Johor,Malaysia.",
      },
      {
        id: 3,
        title: "三合港班",
        time: "週五Friday/7:30PM –9:30 PM",
        type: "婦女班/弟兄班",
        duration: "學期採Quarter制，2月-11月",
        address: "1, JLN LIAI SALLEH, 85400 CHAAH, JOHOR",
      },
      {
        id: 4,
        title: "金山園班",
        time: "週三Wednesday/8:00PM –10:00 PM",
        type: "婦女班/弟兄班",
        duration: "學期採Quarter制，1月-10月",
        address: "恩慈长老教会，47A， JALAN IMPIAN EMAS 2， SKUDAI， JOHOR",
      },
      {
        id: 5,
        title: "使命班（槟城）",
        time: "Friday/星期五8:15pm-10:15pm",
        type: null,
        duration: null,
        address: "40， Jalan Lim Lean Teng, 11600 Penang.",
      },
      {
        id: 6,
        title: " 衛理三一堂班",
        time: "Tuesday/星期二 8pm-10pm",
        type: null,
        duration: null,
        address: "185，Pekan Gurney 32010 Sitiawan, Perak",
      },
      {
        id: 7,
        title: "基督福音教会 (基督福音班)",
        time: "星期五晚8：00-10：00",
        type: null,
        duration: null,
        address:
          "CHRIST GOSPEL CHURCH <br> <blockquote> 9254 KAMPUNG SELAMAT,  32000 SETIAWAN, PERAK",
      },
      {
        id: 8,
        title: "吉隆玻浸信教会（城市花园浸信班）",
        time: "星期日 11.00am – 1pm",
        type: null,
        duration: null,
        address:
          "KUALA LUMPUR BAPTIST CHURCH， DESA PARKCITY, <br><blockquote>  9, JALAN RESIDEN UTAMA, DESA PARKCITY,   52200 KUALA LUMPUR.",
      },
      {
        id: 9,
        title: "卫理班台班",
        time: "週四晚 8:00-10:00pm",
        type: null,
        duration: null,
        address:
          "PANTAI REMIS CHINESE METHODIST CHURCH <br> <blockquote> 23A, JALAN PANTAI MAKMUR    2, TAMAN PANTAI MAKMUR,  34900 PANTAI REMIS ,PERAK ",
      },
      {
        id: 10,
        title: "柔彿州笨珍長老樂恩堂（樂恩班）",
        time: "時間：週六下午3:30-5:30pm",
        type: null,
        duration: null,
        address: null,
      },
      {
        id: 11,
        title: "甲洞宣恩堂 （宣恩班）",
        time: " 週五晚上8:30-10:30pm",
        type: null,
        duration: null,
        address: null,
      },
      {
        id: 12,
        title: "東馬網路班",
        time: null,
        type: null,
        duration: null,
        address: null,
      },
    ],
  },
];



function showCountry(country) {
  document.getElementById("title").innerHTML = country.title;
  document.getElementById("locationPic").src = country.img;
  country.locations.forEach((location) => {
    const container = document.createElement("div");
    container.lang = "zh";
    const fragment = document.createDocumentFragment();
    if (location.title != null) {
      const title = fragment.appendChild(document.createElement("h4"));
      title.innerHTML = location.id + 1 + ". " + location.title;
    }

    if (location.time != null) {
      const time = fragment.appendChild(document.createElement("li"));
      time.textContent = "時間：Day/Time：" + location.time;
    }

    if (location.type != null) {
      const type = fragment.appendChild(document.createElement("li"));
      type.textContent = "班別：" + location.type;
    }

    if (location.duration != null) {
      const duration = fragment.appendChild(document.createElement("li"));
      duration.textContent = location.duration;
    }

    if (location.address != null) {
      const address = fragment.appendChild(document.createElement("li"));
      address.innerHTML = "地址：" + location.address;
    }
    fragment.appendChild(document.createElement("hr"));
    container.appendChild(fragment);
    document.getElementById("locationClasses").appendChild(container);
  });
}

function checkCountries(){
  const name = window.location.pathname.split("/").pop().split(".")[0];
  console.log(name)
  country = countries.filter(country => country.title=name)
  console.log(country)
  showCountry(country[0] )
}

checkCountries()