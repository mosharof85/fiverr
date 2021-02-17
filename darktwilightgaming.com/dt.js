var storeStatus = false; // Change "true" to "false" to remove active sale
var saleAmount = 25; // Change number to whatever % your store is having off, if storeStatus is set to false, this will automatically be displayed as 0
var serverIpAddress = 'https://mcapi.us/server/status?ip=YOUR_SERVER_IP_GOES_HERE';
var discordGuild = 'https://discordapp.com/api/guilds/236093196579504128/embed.json'; //You need to have Server Widget Enabled

$(window).load(function() {
    $("#loading__main").fadeOut("fast");
})

setTimeout(function() { $('#loading__main').fadeOut('fast'); }, 3000);


$(function() {
    $('#loading__main').prependTo('body');
    $('#extrainfo').prependTo('.body-wrap-2');
    $('header').prependTo('.body-wrap-2');

    $('.m_news.main').children('.article').each(function() {
        var news_auth = $(this).find('.heading .info a').contents().filter(function() { return this.nodeType == 3; }).text();
        var news_date = $(this).find('.info span.date').html();
        var news_auth_avt = $(this).find('.element_avatar');
        $(this).find('.element_avatar').insertBefore($(this).find('.info'))
        $(this).find('.info a').text('Posted By ' + news_auth + ' On ' + news_date);
    });

    $('.m_membersonline .featured .user .registered').text("")
    $('.m_membersonline .featured .user .registered').append('<i class="fas fa-circle blink_animation"></i> Active Now')
    $('.m_shoutbox .shout .x a').append('<i class="fas fa-times"></i>');

});
$( document ).ready(function() {
    setTimeout(
        function()
        {
            var username=$('#enjin-bar span.element_username').text();

            if (username == ''){

                $('#boot_username .guest').prepend("Welcome, Guest");
                $(".bottom__btns").hide();
                $("#mainlogin .logged__in").hide();
            }

            else{

                $('#enjin-bar .right .join-site a').prependTo($('.logged__in')).addClass('lin__button');

                $("#boot_username > a").prepend(username);


                $(".logged__out").hide();
                $(".guest").hide();
                $(".steve").hide();


            }

            $( "#boot_username" ).show();
        }, 1);
    var username = $("#prof");
    var mcname = $('#enjin-bar .userbox .username > a');
    if(mcname.text() == '') {
    } else {
        mcname.find("span").remove();

    }


    $('#prof').html($('#enjin-bar .userbox .avatar img'))
    $('#prof').append('<div class="steve"><img src="https://th.bing.com/th/id/R92d475fc8f353d4c699497842437651e?rik=C9VtPNLjTnyB3A&riu=http%3a%2f%2fimages.akamai.steamusercontent.com%2fugc%2f270589838971779280%2f65126BB219D97256FB0B8E276E9803C917FEEF88%2f&ehk=vIzAf0dD4wFYOMSNdx%2blVUv1MG82pr%2b282%2b%2bgKGXSPQ%3d&risl=&pid=ImgRaw" style="height: 40px; width: 40px;"></div>');

    getDiscordUsers();
    getOnlinePlayers();
    getServerStatus();
    StoreSale();

});
var discord_status = false;
function getDiscordUsers() {
    $.getJSON(discordGuild, function(json) {
        discord_status = true;
        $('.dinfo b').html(json['members'].length)

    });
}


function StoreSale() {
    if (storeStatus) {
        $("#ssas").html('<i class="fas fa-cart-arrow-down"></i> Active Sale').css("color", "#94e465");
    } else {
        $("#ssas").html('<i class="fas fa-cart-plus"></i> No Sales Currently').css("color", "#d03a3a");
    }
    if (storeStatus) {
        $("#ssasp").html('<i class="fas fa-piggy-bank"></i> ' + saleAmount + "%").css("color", "#94e465");
    } else {
        $("#ssasp").html('<i class="fas fa-exclamation-triangle"></i> 0%').css("color", "#d03a3a");
    }

}
function getOnlinePlayers() {
    let serverPlayers = 0;

    Promise.all([

        fetch('https://unturned-servers.net/api/?object=servers&element=detail&key=e5yhv1800bybrudc7b1frzesuvp8pumg6kh'),
        fetch('https://unturned-servers.net/api/?object=servers&element=detail&key=vkOGkH1J2QRoo72IOR8Jzbc3wLub9FJM7dA'),
        fetch('https://unturned-servers.net/api/?object=servers&element=detail&key=UHYT9WFdptXmONk6Oea82Y15tzvqkcEZ46C'),
        fetch('https://unturned-servers.net/api/?object=servers&element=detail&key=ZoWFb0Q28jRfdQUecnij46S0yD3DwiAyQi'),
        fetch('https://unturned-servers.net/api/?object=servers&element=detail&key=Hj1xRgey4KdR6AYYoWqKCeI9Mu5iM9fGV'),
        fetch('https://unturned-servers.net/api/?object=servers&element=detail&key=qPKqYkMPka1khCPCj79A1aicJEDSo9oR1io'),
        fetch('https://unturned-servers.net/api/?object=servers&element=detail&key=8YYKNYhOd9VZDzT6UuqJLZfAGX88X9OFdS'),
        fetch('https://unturned-servers.net/api/?object=servers&element=detail&key=27t2l8o0XfvMJTK13Y6cCRqje2VO1SHApK'),
        fetch('https://unturned-servers.net/api/?object=servers&element=detail&key=xUWRrbCV4SJ778cRtazWH8jikuTgXIVhh0i'),
        fetch('https://unturned-servers.net/api/?object=servers&element=detail&key=Ic8GMvvMfupru42NnT22fZRs0WXVGeoyA'),
        fetch('https://unturned-servers.net/api/?object=servers&element=detail&key=uKhInjcLAqYo2p760u7iEuR49uiV67HkYM7'),
        fetch('https://unturned-servers.net/api/?object=servers&element=detail&key=iwLBAURJL0GfXpQsNLyHDF6PCLYDespops'),
        fetch('https://unturned-servers.net/api/?object=servers&element=detail&key=OnYAxyGHH62VDiMisHg0TKh2JV4urqTUdk'),
        fetch('https://unturned-servers.net/api/?object=servers&element=detail&key=vmPyqVca6xSo6BSzax9lXLWxm6xBSyJzSI'),
        fetch('https://unturned-servers.net/api/?object=servers&element=detail&key=ZfGYhGvhNNQQP7PQHazUBW1wIcSH2K7fvrI')

    ]).then(function (responses) {
        return Promise.all(responses.map(function (response) {
            return response.json();
        }));
    }).then(function (data) {
        data.forEach(item=>{
            serverPlayers += (parseInt(item.players));
        });
        $("#online,#online1").html(serverPlayers);
        console.log(serverPlayers);
    }).catch(function (error) {
        console.log(error);
    });

    setTimeout(getOnlinePlayers, 5000);
}
function getServerStatus() {
    $.getJSON("https://unturned-servers.net/api/?object=servers&element=detail&key=zt9qNE1nwbQyiqCXHj3nEFb7CaRopVRAcG", function(json) {
        if (json.is_online) {
            $(".sst").html('Online <i class="fas fa-bolt"></i>').css("color", "#94e465");
        } else {
            $(".sst").html('Offline <i class="fas fa-times"></i>').css("color", "#d03a3a");
        }


        if (json.version !== "") {
            $(".ssv").html(json.version + ' <i class="fas fa-code-branch"></i>').css("color", "#94e465");
        } else {
            $(".ssv").html('Unknown <i class="fas fa-exclamation-triangle"></i>').css("color", "#d03a3a");
        }


        setTimeout(getServerStatus, 5000);
    });
}

setTimeout(function() {
    if (!discord_status) {
        $('.dinfo b').html('<i class="fas fa-spinner fa-spin"></i>');
    }
}, 5000);
$(function() {
    var ip = new Clipboard('#ip');

    ip.on("success", function() {
        $('#ip p').html("IP has been successfully copied!");

        setTimeout(function() {
            $('#ip p').html("Click to copy IP address!");
        }, 3000);

    });
});