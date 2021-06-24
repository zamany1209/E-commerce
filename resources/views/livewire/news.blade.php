   <section class="subscribe_part section_padding">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="subscribe_part_content">
                      <h2>Get promotions & updates!</h2>
                      <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
                      <div class="subscribe_form">
                          <form wire:submit.prevent="save_email_news">
                          <input type="text" name="email" wire:model="email" placeholder="Enter your mail">
                           @error('email') <p style="color:#fffffff;font-size:22px;">{{ $message }}</p> @enderror
                          <button onclick="alert('your Email have Save News')" class="btn_1">Subscribe</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
