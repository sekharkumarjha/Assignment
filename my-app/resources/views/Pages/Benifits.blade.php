<div>
   <div class="container-max-width pB-30">
      <h2 class="mB-T2B">
         <div class="field field--name-field-heading field--type-string field--label-hidden field--item">Benefits of a donor-advised fund</div>
      </h2>
      <div class="image-with-text-para mB-section">
         <div class="para-cards tab-row">
         @foreach($Benifits as $data )
            @include('components.benifits-card',['data' => $data])
         @endforeach
         </div>
      </div>
      <div class="primaryCta flex pB-50 cta-button-width-100">
         <a class="flex-center link-center" title="OPEN AN ACCOUNT" href="/SignUp">
            <span>OPEN AN ACCOUNT </span>
            <div class="new_arrow lg"><span class="arrow_line"><span></span></span></div>
         </a>
      </div>
   </div>
</div>
<div>