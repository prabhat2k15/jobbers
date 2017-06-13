@extends('layouts.main')

@section('content')
<section>
	<div class="container">
		<div class="row title text-center" style="padding:0px">
			<h3>Post Job</h3>
			<h6 class="alt">Fill Job Details here to post</h6>
		</div>
		
           <!--********************-->
    <form action="postjobsubmit" method="POST" class="form-group">
   {{ csrf_field() }}
        <div class="row" style="padding:0px">
            <div  class="col-md-8">
                <input type="text" name="title" class="form-control" placeholder="Title" required>
            </div>
            <div  class="col-md-4">
                <input type="text" name="designation" class="form-control" placeholder="Designation" required>
            </div>
            <div  class="col-md-4">
               <select class="form-control" name="category">
                    <option value="" selected="selected">Category</option>
                    <option >IT - Software</option>
                    <option >Banking / Financial Services</option>
                    <option >Manufacturing</option>
                    <option >Engineering / Construction</option>
                    <option >Education / Training</option>
                    <option >BPO / Call Center</option>
                    <option >Internet / E-Commerce</option>
                    <option >IT - Hardware / Networking</option>
                    <option >Automobile / Auto Ancillaries</option>
                    <option >Telecom / ISP</option>
                    <option >Medical / Healthcare</option>
                    <option >Advertising / MR / PR / Events</option>
                    <option >Agriculture / Dairy</option>
                    <option >Animation</option>
                    <option >Architecture / Interior Design</option>
                    <option >Astrology</option>
                    <option >Aviation / Airline</option>
                    <option >Cement / Building Material</option>
                    <option >Chemical / Plastic / Rubber / Glass</option>
                    <option >Consumer Durables / Electronics</option>
                    <option >Environment / Waste Management</option>
                    <option >Export-Import / Trading</option>
                    <option >Fertilizers / Pesticides</option>
                    <option >FMCG / F&amp;B</option>
                    <option >Furnishings / Sanitaryware / Electricals</option>
                    <option >Gems / Jewellery</option>
                    <option >Gifts / Toys / Stationary</option>
                    <option >Government Department</option>
                    <option >Hotel / Restaurant</option>
                    <option >Industrial Design</option>
                    <option >Insurance</option>
                    <option >KPO / Analytics</option>
                    <option >Legal</option>
                    <option >Logistics / Courier / Transportation</option>
                    <option >Management Consulting / Strategy</option>
                    <option >Matrimony</option>
                    <option >Media / Entertainment</option>
                    <option >Merchant Navy</option>
                    <option >Metal / Iron / Steel</option>
                    <option >Military / Police / Arms &amp; Ammunition</option>
                    <option >Mining</option>
                    <option >NGO / Social Work</option>
                    <option >Oil &amp; Gas / Petroleum</option>
                    <option >Paint</option>
                    <option >Paper / Wood</option>
                    <option >Personal Care / Beauty</option>
                    <option >Pharma / Biotech</option>
                    <option >Politics</option>
                    <option >Power / Energy</option>
                    <option >Printing / Packaging</option>
                    <option >Quality Certification</option>
                    <option >Real Estate</option>
                    <option >Recruitment Services</option>
                    <option >Religion / Spirituality</option>
                    <option >Retail</option>
                    <option >Sculpture / Craft</option>
                    <option >Security / Detective Services</option>
                    <option >Sports / Fitness</option>
                    <option >Textile / Garments / Fashion</option>
                    <option >Travel / Tourism</option>
                    <option >Unskilled Labor / Domestic Help</option>
                    <option >Veterinary Science / Pet Care</option>
                </select>
            </div>
            <div  class="col-md-4">
               <select class="form-control" name="subcategory">
                    <option value="" selected="selected">Sub Category</option>
                    <option >Finance / Accounts / Investment Banking</option>
                    <option >Customer Service / Back Office Operations</option>
                    <option >IT - Software</option>
                    <option >Production / Maintenance / Service</option>
                    <option >Sales / BD</option>
                    <option >IT - Hardware / Networking / Telecom Engineering</option>
                    <option >Engineering Design / Construction</option>
                    <option >Administration / Front Office / Secretary</option>
                    <option >Marketing / Advertising / MR / PR / Events</option>
                    <option >Quality / Testing (QA-QC)</option>
                    <option >Education / Training / Language</option>
                    <option >Architecture / Interior Design</option>
                    <option >Civil Services / Military / Police</option>
                    <option >Environment / Health / Safety</option>
                    <option >Graphic Design / Web Design / Copywriting</option>
                    <option >Hotel / Restaurant</option>
                    <option >HR / Recruitment</option>
                    <option >Journalism / Content / Writing</option>
                    <option >Legal / Company Secretary</option>
                    <option >Management Consulting / Strategy / EA</option>
                    <option >Medical / Healthcare</option>
                    <option >Oil &amp; Gas Engineering / Mining / Geology</option>
                    <option >R&amp;D / Product Design</option>
                    <option >Real Estate</option>
                    <option >Retail / Export-Import / Trading</option>
                    <option >SBU Head / CEO / Director / Entrepreneur</option>
                    <option >Security / Detective Services</option>
                    <option >Statistics / Analytics / Acturial Science</option>
                    <option >Supply Chain / Purchase / Inventory</option>
                    <option >Travel / Aviation / Merchant Navy</option>
                    <option >TV / Film / Radio / Entertainment</option>
                    <option >Other</option>   
                </select>
            </div>
            <div  class="col-md-4">
               <select class="form-control" name="jobtype">
                    <option> Select Job Type </option>   
                    <option> Full Time </option>   
                    <option> Part Time </option>   
                    <option> Freelance </option>   
                    <option> Contractual </option>   
                </select>
            </div>
            <div  class="col-md-4">
               <select class="form-control" name="salary">
                    <option> Salary Offered (per month) </option>   
                    <option> 5k - 10k </option>   
                    <option> 10k - 20k </option>   
                    <option> 20k - 30k </option>   
                    <option> 30k - 40k </option>   
                    <option> > 40k </option>   
                </select>
            </div>
             <div  class="col-md-8">
                <input type="text" name="skills" class="form-control" placeholder="Skills" required>
            </div>
            <div class="col-md-12">
                <textarea name="description" id="description" placeholder="Job Description" rows="5" class="form-control" required></textarea>
            </div>
            <div  class="col-md-6">
                <input type="text" name="company" class="form-control" placeholder="Company" required>
            </div>
            <div  class="col-md-6">
                <input type="text" name="address" class="form-control" placeholder="Address" required>
            </div>
            <div  class="col-md-6">
                <input type="text" name="city" class="form-control" placeholder="city" required>
            </div>
            <div  class="col-md-6">
                <input type="text" name="pin" class="form-control" placeholder="Pin" required>
            </div>
            <div  class="col-md-6">
               <select class="form-control" name="district" required>
                    <option value="0" selected>Select Job Location</option>
                    <option value="Butwal">Butwal</option>
                    <option value="Bhairahawa">Bhairahawa</option>
                    <option value="Birgunj">Birgunj</option>
                    <option value="Biratnagar">Biratnagar</option>
                    <option value="Bhaktapur">Bhaktapur</option>
                    <option value="Ilam">Ilam</option>
                    <option value="Janakpur">Janakpur</option>
                    <option value="Kathmandu">Kathmandu</option>
                    <option value="Lalitpur">Lalitpur</option>
                    <option value="Mahendranagar">Mahendranagar</option>
                    <option value="Nepalgunj">Nepalgunj</option>
                    <option value="Rajbiraj">Rajbiraj</option>
                    <option value="Pokhara">Pokhara</option>
                    <option value="Dang">Dang</option>
                    <option value="Dhangadhi">Dhangadhi</option>
                    <option value="Doti">Doti</option>
                    <option value="Hetauda">Hetauda</option>
                    <option value="Narayangadh">Narayangadh</option>
                    <option value="Dharan">Dharan</option>
                    <option value="Achham">Achham</option>
                    <option value="Arghakhanchi">Arghakhanchi</option>
                    <option value="Baglung">Baglung</option>
                    <option value="Baitadi">Baitadi</option>
                    <option value="Bajhang">Bajhang</option>
                    <option value="Bajura">Bajura</option>
                    <option value="Banke">Banke</option>
                    <option value="Bara">Bara</option>
                    <option value="Bardiya">Bardiya</option>
                    <option value="Bhojpur">Bhojpur</option>
                    <option value="Chitwan">Chitwan</option>
                    <option value="Dadeldhura">Dadeldhura</option>
                    <option value="Dailekh">Dailekh</option>
                    <option value="Darchula">Darchula</option>
                    <option value="Dhading">Dhading</option>
                    <option value="Dhankuta">Dhankuta</option>
                    <option value="Dhanusa">Dhanusa</option>
                    <option value="Dolakha">Dolakha</option>
                    <option value="Dolpa">Dolpa</option>
                    <option value="Gorkha">Gorkha</option>
                    <option value="Gulmi">Gulmi</option>
                    <option value="Humla ">Humla </option>
                    <option value="Jajarkot">Jajarkot</option>
                    <option value="Jhapa">Jhapa</option>
                    <option value="Jumla">Jumla</option>
                    <option value="Kailali">Kailali</option>
                    <option value="Kalikot">Kalikot</option>
                    <option value="Kanchanpur">Kanchanpur</option>
                    <option value="Kapilvastu">Kapilvastu</option>
                    <option value="Kaski">Kaski</option>
                    <option value="Kavrepalanchok">Kavrepalanchok</option>
                    <option value="Khotang">Khotang</option>
                    <option value="Lamjung">Lamjung</option>
                    <option value="Mahottari">Mahottari</option>
                    <option value="Makwanpur">Makwanpur</option>
                    <option value="Manang">Manang</option>
                    <option value="Morang">Morang</option>
                    <option value="Mugu">Mugu</option>
                    <option value="Mustang">Mustang</option>
                    <option value="Myagdi">Myagdi</option>
                    <option value="Nawalparasi">Nawalparasi</option>
                    <option value="Nuwakot">Nuwakot</option>
                    <option value="Okhaldhunga">Okhaldhunga</option>
                    <option value="Palpa">Palpa</option>
                    <option value="Panchthar">Panchthar</option>
                    <option value="Parbat">Parbat</option>
                    <option value="Parsa">Parsa</option>
                    <option value="Pyuthan">Pyuthan</option>
                    <option value="Ramechhap">Ramechhap</option>
                    <option value="Rasuwa">Rasuwa</option>
                    <option value="Rautahat">Rautahat</option>
                    <option value="Rolpa">Rolpa</option>
                    <option value="Rukum">Rukum</option>
                    <option value="Rupandehi">Rupandehi</option>
                    <option value="Salyan">Salyan</option>
                    <option value="Sankhuwasabha">Sankhuwasabha</option>
                    <option value="Saptari">Saptari</option>
                    <option value="Sarlahi">Sarlahi</option>
                    <option value="Sindhuli">Sindhuli</option>
                    <option value="Sindhupalchok">Sindhupalchok</option>
                    <option value="Siraha">Siraha</option>
                    <option value="Solukhumbu">Solukhumbu</option>
                    <option value="Sunsari">Sunsari</option>
                    <option value="Surkhet">Surkhet</option>
                    <option value="Syangja">Syangja</option>
                    <option value="Tanahu">Tanahu</option>
                    <option value="Taplejung">Taplejung</option>
                    <option value="Terhathum">Terhathum</option>
                    <option value="Udayapur">Udayapur</option>    
                    <option value="0">Any</option> 
                </select>
            </div>
            <div  class="col-md-6">
               <select class="form-control" name="country" required>
                    <option> Country </option>   
                    <option> Nepal </option>   
                </select>
            </div>
           
           
            <div  class="col-md-4">
                <input type="text" name="person" class="form-control" placeholder="Name of Person" required>
            </div>
            <div  class="col-md-4">
                <input type="email" name="email" class="form-control" placeholder="Email " required>
            </div>
            <div  class="col-md-4">
                <input type="text" name="mobile" class="form-control" placeholder="Mobile " required>
            </div>
                <input type="submit" name="submit" onclick="return ajaxFunction()" class=" btn btn-success btn-lg" >
                <input type="reset" name="reset" class="btn btn-primary btn-lg">
            
        </div>
    </form>
           <!--********************-->
		
	</div>
</section>



@endsection