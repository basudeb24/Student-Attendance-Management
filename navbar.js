const list = document.querySelectorAll(".nav-item");
      function activeLink() {
        list.forEach((item) => item.classList.remove("active"));
        this.classList.add("active");
      }

      list.forEach((item) => item.addEventListener("click", activeLink));