            <div class="card_area">
                <div class="product_count_area">
                    <p>Quantity</p>
                    <div class="product_count d-inline-block">
                        <span class="product_count_item inumber-decrement" wire:click="minus" > <i class="ti-minus"></i></span>
                        <input class="product_count_item input-number" type="text" wire:model.defer="number" min="1" max="10">
                        <span class="product_count_item number-increment" wire:click="plus" > <i class="ti-plus"></i></span>
                    </div>
                    <p>${{ $fe_price }}</p>
                </div>
              <div class="add_to_cart">
                <form method="get">
                  <a wire:click="Add_to_cart" class="btn_3">add to cart</a>
                    @if(Session::get('error_cart'))
                        <p>{{ Session::get('error_cart') }}</p>
                    @endif
                </form>
              </div>
            </div>
