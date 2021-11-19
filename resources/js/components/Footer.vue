<template>
  <section id="footer">
    <div class="container">
      <div class="footer-top row pb-5">
        <div class="social col-4">
          <div class="logo">
            <a class="logo-brand"><i class="fas fa-utensils"></i> DELIVEBOO </a>
          </div>
          <div>Deliveboo's mission is to transform the way customers eat. A key ingredient of our success is offering our customers the best selection of restaurants.</div>
          <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>

        <div class="links-container col-4">
          <div class="links-list">
            <h5>Discover Deliveboo</h5>
            <ul>
              <li><a href="#"><i class="fas fa-angle-right fa-sm"></i>Investors</a></li>
              <li><a href="#"><i class="fas fa-angle-right fa-sm"></i>About us</a></li>
              <li><a href="#"><i class="fas fa-angle-right fa-sm"></i>Takeaway</a></li>
              <li><a href="#"><i class="fas fa-angle-right fa-sm"></i>Newsroom</a></li>
              <li><a href="#"><i class="fas fa-angle-right fa-sm"></i>Foodscene blog</a></li>
              <li><a href="#"><i class="fas fa-angle-right fa-sm"></i>Gift Cards</a></li>
              <li><a href="#"><i class="fas fa-angle-right fa-sm"></i>Careers</a></li>
              <li><a href="#"><i class="fas fa-angle-right fa-sm"></i>Become a rider</a></li>
            </ul>
          </div>
        </div>

        <div class="newsletter col-4">
          <h5>Newsletter</h5>
          <div>Sign up and receive the latest tips via email.</div>
          <div>Write your email <span>*</span></div>
          <form  method="post" class="your-email">
            <label for="email"></label>
            <input type="email" placeholder="example@example.com" class="form-control" id="email" name="email">
            <button type="submit" class="btn mt-4">Subscribe</button>
          </form>
        </div>
      </div>
      <div class="footer-bottom row">
        <div class="col">
          <div>
            &#169; 2021 Deliveboo
          </div>
        </div>
        <div class="col">
          <div class="text-right">
            Design with <i class="fas fa-utensils"></i> by Team5
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'Footer',
}
</script>

<style scoped lang="scss">
  #footer {
    background-color: black;
    color: white;
    padding-top: 50px;
  }

  h5 {
    margin-bottom: 20px;
    color: white;
  }

  ul {
    padding-left: 0;
  }

  .logo {
    margin-bottom: 20px;
  }

  .logo-brand {
    color: white;
  }

  li {
    list-style-type: none;
    a {
      color: white;
      i {
        padding-right: 8px;
      }
    }
  }  

  .social-icons {
    display: flex;
    a {
      text-decoration: none;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 25px;
      width: 25px;
      margin-right: 5px;
      margin-top: 20px;
      border-radius: 5px;
      border: 1px solid white;
      color: white;
    }
  }

  .social {
    width: 25%;
  }

  .newsletter {
    span {
      color: #38C172;
    }
    div:first-of-type {
      padding-bottom: 25px;
    }
    .your-email {
      input {
        background-color: #27314F;
        color: white;
      }
    }
    button {
      color: #38C172;
      background-color: #27314F;
      width: 100%;
      font-size: 1rem;
      font-weight: bold;
      border: 1px solid #ced4da;
    }
  }
  
  .links-container {
    width: 40%;
    display: flex;
    justify-content: space-around;
  }

  .footer-bottom {
    border-top: 1px solid #3C4858;
    padding: 25px 0;
    i {
      padding: 0 5px;
      color: #38C172;
    }
  }
</style>