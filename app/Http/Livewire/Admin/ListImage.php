<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProductImg;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class ListImage extends Component
{
    public $id_product;
    public $image;
    public function mount($id_product)
    {
        $this->id_product = $id_product;
        $this->image = ProductImg::where('product_id' , '=' , $this->id_product)->get();
    }
    public function removeImage($images)
    {
        $ImageFile = "product/".$images["url"];
        File::delete($ImageFile);
        $product_image = ProductImg::find($images["id"]);
        $product_image->delete();
        $this->image = ProductImg::where('product_id' , '=' , $this->id_product)->get();
    }
    public function render()
    {
        return view('livewire.admin.list-image');
    }
}
