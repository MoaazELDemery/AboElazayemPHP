jQuery(document).ready(function () {
    var $num = 1;
    $("#button").on('click', function () {
        $('.tafser-container').append(`
        <div class="form-group">
        <label class="control-label col-md-3">التفسير  </label>
        <div class="col-md-9">
        <textarea  style=" text-align: left; " class='form-control tinymce' name='tafser["+$num+"][tafser_ar]' rows='3'></textarea>

        </div>
    </div>`);
        $num++;
        tinymce.init({
            selector: '.tinymce',
            plugins: 'casechange',
            toolbar: 'casechange',
            height: '300px',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    });
});








jQuery(document).ready(function () {
    App.init(); // init metronic core componets





    let baseUrl = location.href ;
    let finalUrl = baseUrl.split('/').slice(0,-1).slice(0,-1).join('/') ;
    console.log(finalUrl)
    getAll() ;

    allSoura = [] ;

    async  function getSoura()
    {
        let soura  = await fetch(finalUrl  + `/tafser/getSoura`) ;
        let allSouraJson = await soura.json() ;

        allSoura.push(allSouraJson)  ;
        console.log(allSoura)
    }


        async function getAya(soraId , element)
    {
        console.log('hello')

        let response  = await fetch(finalUrl  + `/tafser/getAya/${soraId}`) ;
        let finalResult = await response.json() ;

        console.log(element[0])

        // console.log($('.' + element).parent().next().find('select')) ;

        let content  = `` ;
        await finalResult.forEach(ele =>  {
            content += `<option value="${ele.key_aya}">${ele.key_aya}</option>`
        })

        console.log(element[0].lastElementChild)
        element[0].innerHTML = content ;

        // console.log($("select[dataClass =))

    }




    $("#next").on('click', function () {

        let number = $('#ayaNumber').val();

        getSoras(number)

    });


   async  function getSoras(num)
    {
       await getSoura()
        let content = ``  ;
        let options  = ``;

        for(let i = 0 ; i <  allSoura[0].length ; i++ )
        {
            options +=` <option value=${allSoura[0][i].index}>${allSoura[0][i].name}</option>`
        }


        for(let i=0 ; i < num ; i++ )
        {

            content += `
                <div class="form-group">
                            <label class="control-label col-md-3">اختر السوره</label>
                               <div class="col-md-4">
                                <select required style="width : 100% !important ; padding : 5px !important "  class="testing"   dataClass = "sora1"  name="aya[${i}][sora_id]"
                                        class="form-control " tabindex="-1"
                                        aria-hidden="true">
                                    <option></option>
                                    <optgroup label="السورة">
                                           ${options}
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select required id="ayaWrapper" name="aya[${i}][key_aya]"
                                        class="form-control" tabindex="-1"
                                        aria-hidden="true">
                                    <option></option>

                                </select>
                        </div>
                        </div>
                `
        }
        document.getElementById('aya-container').innerHTML = content ;
        $('.testing').on('change' , function (){
            console.log($(this).val());
            getAya($(this).val() , $(this).parent().next().find('select'))

        })
    }



   allSouradata = [] ;
    async function getAll()
    {
        let request  =  await fetch(finalUrl  + `/tafser/getSoura`) ;
        let finalResult = await  request.json();
        await  allSouradata.push(finalResult)


        options = `` ;
        let content  = `` ;
        for(let i=0 ; i < allSouradata[0].length ;  i++ )
        {
            options +=` <option value=${allSouradata[0][i].index}>${allSouradata[0][i].name}</option>` ;
        }
        content += `<select id="soraId" required style="width : 100% !important ; padding : 5px !important "  class="testing"  name="sora_id"   dataClass = "sora1"
                                class="form-control " tabindex="-1"
                                aria-hidden="true">
                            <option></option>
                            <optgroup label="السورة">
                                ${options}
                            </optgroup>
                        </select>`
        document.getElementById('testing').innerHTML = content  ;
        $('.testing').on('change' , function (){
            getAya($(this).val() , $(this).parent().next().find('select'))
        })


    }


});

jQuery(document).ready(function () {
    App.init(); // init metronic core componets
    $("#poem_id").on('change', function (event) {
        var num = event.target.options[event.target.selectedIndex].dataset.number;
        $('.qasida-container').html('');
        for (let i = 0; i < num; i++) {
            $('.qasida-container').append(`<div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" >  الجزء الاول من البيت :</label>
                                    <textarea class="form-control" id="right_ar" name=" poem_rawys[`+ i + `][right_ar]" rows="3"></textarea>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label class="control-label" style=" text-align: left; width: 100%;"> The first text of the poem is in English</label>
                                    <textarea class="form-control" style=" text-align: left;" id="right_en" name="poem_rawys[`+ i + `][right_en]"  rows="3"></textarea>
                                </div>
                            </div>

                        <!--/row-->
                        <!--/row-->

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label"> الجزء الثاني من البيت :</label>
                            <textarea class="form-control" id="left_ar" name="poem_rawys[`+ i + `][left_ar]" rows="3"></textarea>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="control-label" style=" text-align: left; width: 100%;"> The second text of the poem is in English</label>
                                <textarea class="form-control" style=" text-align: left;" id="left_en" name="poem_rawys[`+ i + `][left_en]"  rows="3"></textarea>
                            </div>
                        </div>
                    </div>`);
        }
    });

});

