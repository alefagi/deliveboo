<template>
  <section id="footer">
    <div class="container">
      <div class="social">
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

      <div class="links-container">
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

      <div class="newsletter">
        <h5>Newsletter</h5>
        <div>Sign up and receive the latest tips via email.</div>
        <div>Write your email <span>*</span></div>
        <div class="your-email">
          <i class="far fa-envelope"></i>
          <input type="email">
        </div>
        <button class="btn"><span>Subscribe</span></button>
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
    padding: 50px 0;
  }

  .container {
    display: flex;
    justify-content: space-between;
    &>* {
      width: 30%;
    }
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
    width: 25%;
    span:first-child {
      color: #E43F52;
    }
    div:first-of-type {
      padding-bottom: 25px;
    }
    .your-email {
      display: flex;
      border-radius: 10px;
      background-color: #27314F;
      padding: 15px;
      margin: 15px 0;
      span {
        font-size: 0.9rem;
        margin-right: 3px;
        display: flex;
        align-items: center;
      }
      input {
        border: none;
        margin-left: 5px;
        outline: none;
        background-color: #27314F;
        color: white;
      }
      i {
        margin-right: 12px;
        align-self: center;
      }
    }
    button {
      border-radius: 5px;
      color: white;
      padding: 14px 12px;
      background-color: #27314F;
      border: none;
      box-shadow: 1px 3px 10px rgba(233, 70, 73, .2);
      width: 100%;
    }
  }

  button span {
    font-size: 1rem;
    font-weight: bold;
  }
  
  .links-container {
    width: 40%;
    display: flex;
    justify-content: space-around;
  }
</style>