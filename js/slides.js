
$(function(){
    // var hash=window.location.hash;
        const container=$('#content_holder');
        let links=$('.menus .list-group a');
        links.on('click',loadResource);

        function loadResource(evt){
            var resource=evt.target.hash;
            evt.preventDefault();
            
            let isActive=evt.target.classList.contains('active')?true:false;
            if(resource!='' && !isActive){
                resource=resource.substring(1);
                //fetchResource(resource); 
                switch(resource){
                    case 'addSlides':
                        addSlides();
                        break;
                    case 'changeOrder':
                        changeOrder();
                        break;
                    default :
                        alert('default');
                        break;
                }
                
            }else{
                alert('No need Fetch Anything');
            }
            makeActive(evt.target);
        }

        function addSlides(){
            console.log('Adding Slide');
        }

        function changeOrder(){
            console.log('Changing Order');
        }
        function makeActive(target){
            var isActive=target;
            isActive=isActive.classList.contains('active')?true:false;
            if(!isActive){
                links.map(function(index,elem){
                    if(elem.classList.contains('active')){
                        $(elem).toggleClass('active');
                    }
                });
                $(target).toggleClass('active');
            }
        }

        (function fetchResource(){
            data={'url':''};
            data=JSON.stringify(data);
            var myObj=ajax('POST','fetch.php',parseResponse);
            myObj.send(data);
        })();

        function parseResponse(response){
            response=JSON.parse(response);
            response=response.split(',');
            let html=``;
            $(response).each(function(index,element){
                if(index==0){
                    html+=`<div class="jumbotron main_slide">
                                <p class="caption">Main Slide</p>
                            </div> <div class="row">`;
                }else{
                    html+=`
                    <div class="sub_slide col-sm-3 img-thumbnail">
                        <p class="caption">Sub-slide ${index}</p>
                    </div>
                    `;
                }
            });
            $(container).html(html);
        }
        function ajax(method,url,handler){
            let ajaxObj=new XMLHttpRequest();
            ajaxObj.open(method,url,true);
            ajaxObj.setRequestHeader('Content-type','application/json');
            ajaxObj.onreadystatechange=function(){
                if(ajaxObj.status==200 && ajaxObj.readyState==4){
                    handler(ajaxObj.responseText);
                }
            }
            return ajaxObj;
        }
});

