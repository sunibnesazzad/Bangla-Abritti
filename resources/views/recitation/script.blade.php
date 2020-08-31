


<script type="text/javascript">
    /*search button function*/

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-search").click(function(e) {
        e.preventDefault();
        var reciter_name = $("select[name=reciter_name]").val();
        var author_name = $("select[name=author_name]").val();
        var poem_name = $("input[name=poem_name]").val();
        var vedio_flag = $("input[name=vedio_flag]").val();
        var audio_flag = $("input[name=audio_flag]").val();


        $.ajax({
            type: 'POST',
            url: '/recitation/search',
            data: {reciter_name: reciter_name, author_name: author_name,
                poem_name: poem_name, vedio_flag:vedio_flag, audio_flag:audio_flag  },
            success: function (data) {
                /*alert(data.success);*/
                console.log(data.options);
                $("table[name='table1']").html('');
                $("table[name='table1']").html(data.options);
            }


        });
    });


</script>


{{--<script type="text/javascript">
    /*search button function*/

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-search").click(function(e) {
        e.preventDefault();
        var reciter_name = $("select[name=reciter_name]").val();
        var author_name = $("select[name=author_name]").val();
        var poem_name = $("input[name=poem_name]").val();


        $.ajax({
            type: 'GET',
            url: '/recitation/search1',
            data: {reciter_name: reciter_name, author_name: author_name, poem_name: poem_name},
            success: function (data) {
                /*alert(data.success);*/
                console.log(data);
                $('#example tr').not(':first').remove();
                var html = '';
                for(var i = 0; i < data.length; i++){
                    html += '<tr>'+
                        '<td>' + data[i].RECITER_NAME + '</td>' +
                        '<td>' + data[i].POEM_NAME + '</td>' +
                        '<td>' + data[i].AUTHOR_NAME + '</td>' +
                        /*'<td>' + data[i].fpmout + '</td>' +*/
                        '</tr>';
                }
                $('#example tr').first().after(html);
            },
            error: function (data) {
            }

        });
    });


</script>--}}

{{--reset button function--}}
<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //reset Button
    $(".btn-reset").click(function(e){
        e.preventDefault();
        var name = $("button[name=reset]").val();


        $.ajax({
            type:'POST',
            url:'/recitation/ajax',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });
        document.getElementById("myForm").reset();


    });
</script>

{{--reset button function End--}}



<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    /*1th function*/

    $(".btn-submit1").click(function(e){
        e.preventDefault();
        var name = $("button[name=name1]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });
    /*2nd function*/

        $(".btn-submit2").click(function(e){
        e.preventDefault();
        var name = $("button[name=name2]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*third function*/

        $(".btn-submit3").click(function(e){
        e.preventDefault();
        var name = $("button[name=name3]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*4th function*/

        $(".btn-submit4").click(function(e){
        e.preventDefault();
        var name = $("button[name=name4]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*5th function*/

        $(".btn-submit5").click(function(e){
        e.preventDefault();
        var name = $("button[name=name5]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*6th function*/

        $(".btn-submit6").click(function(e){
        e.preventDefault();
        var name = $("button[name=name6]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });
            /*7th function*/

        $(".btn-submit7").click(function(e){
        e.preventDefault();
        var name = $("button[name=name7]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*8th function*/

        $(".btn-submit8").click(function(e){
        e.preventDefault();
        var name = $("button[name=name8]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*9th function*/

        $(".btn-submit9").click(function(e){
        e.preventDefault();
        var name = $("button[name=name9]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*10th function*/

        $(".btn-submit10").click(function(e){
        e.preventDefault();
        var name = $("button[name=name10]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*11th function*/

        $(".btn-submit11").click(function(e){
        e.preventDefault();
        var name = $("button[name=name11]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });
            /*12th function*/

        $(".btn-submit12").click(function(e){
        e.preventDefault();
        var name = $("button[name=name12]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

                    /*12th function*/

        $(".btn-submit13").click(function(e){
        e.preventDefault();
        var name = $("button[name=name13]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*14th function*/

        $(".btn-submit14").click(function(e){
        e.preventDefault();
        var name = $("button[name=name14]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*15th function*/

        $(".btn-submit15").click(function(e){
        e.preventDefault();
        var name = $("button[name=name15]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*16th function*/

        $(".btn-submit16").click(function(e){
        e.preventDefault();
        var name = $("button[name=name16]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });
            /*17th function*/

        $(".btn-submit17").click(function(e){
        e.preventDefault();
        var name = $("button[name=name17]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*18th function*/

        $(".btn-submit18").click(function(e){
        e.preventDefault();
        var name = $("button[name=name18]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*19th function*/

        $(".btn-submit19").click(function(e){
        e.preventDefault();
        var name = $("button[name=name19]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*20th function*/

        $(".btn-submit20").click(function(e){
        e.preventDefault();
        var name = $("button[name=name20]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

                    /*21th function*/

        $(".btn-submit21").click(function(e){
        e.preventDefault();
        var name = $("button[name=name21]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });
            /*22th function*/

        $(".btn-submit22").click(function(e){
        e.preventDefault();
        var name = $("button[name=name22]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

                    /*23th function*/

        $(".btn-submit23").click(function(e){
        e.preventDefault();
        var name = $("button[name=name23]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*24th function*/

        $(".btn-submit24").click(function(e){
        e.preventDefault();
        var name = $("button[name=name24]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*25th function*/

        $(".btn-submit25").click(function(e){
        e.preventDefault();
        var name = $("button[name=name25]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*26th function*/

        $(".btn-submit26").click(function(e){
        e.preventDefault();
        var name = $("button[name=name26]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });
            /*27th function*/

        $(".btn-submit27").click(function(e){
        e.preventDefault();
        var name = $("button[name=name27]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*28th function*/

        $(".btn-submit28").click(function(e){
        e.preventDefault();
        var name = $("button[name=name28]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*29th function*/

        $(".btn-submit29").click(function(e){
        e.preventDefault();
        var name = $("button[name=name29]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*30th function*/

        $(".btn-submit30").click(function(e){
        e.preventDefault();
        var name = $("button[name=name30]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*31th function*/

    $(".btn-submit31").click(function(e){
        e.preventDefault();
        var name = $("button[name=name31]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });
    /*32th function*/

        $(".btn-submit32").click(function(e){
        e.preventDefault();
        var name = $("button[name=name32]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*33th function*/

        $(".btn-submit33").click(function(e){
        e.preventDefault();
        var name = $("button[name=name33]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*34th function*/

        $(".btn-submit34").click(function(e){
        e.preventDefault();
        var name = $("button[name=name34]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*35th function*/

        $(".btn-submit35").click(function(e){
        e.preventDefault();
        var name = $("button[name=name35]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*36th function*/

        $(".btn-submit36").click(function(e){
        e.preventDefault();
        var name = $("button[name=name36]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });
            /*37th function*/

        $(".btn-submit37").click(function(e){
        e.preventDefault();
        var name = $("button[name=name37]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*38th function*/

        $(".btn-submit38").click(function(e){
        e.preventDefault();
        var name = $("button[name=name38]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*39th function*/

        $(".btn-submit9").click(function(e){
        e.preventDefault();
        var name = $("button[name=name39]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*40th function*/

        $(".btn-submit40").click(function(e){
        e.preventDefault();
        var name = $("button[name=name40]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

            /*41th function*/

        $(".btn-submit41").click(function(e){
        e.preventDefault();
        var name = $("button[name=name41]").val();


        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='reciter_name']").html('');
                $("select[name='reciter_name']").html(data.options);
                /*alert(data.success);*/
            }
        });

    });

</script>





