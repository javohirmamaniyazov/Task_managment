<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Management</title>
    <link rel="icon" style="border: none; border-radius: 50%" href="data:image/png;base64,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">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            line-height: 1.6;
            background-color: #F3F4F6;
            margin: 0;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background-color: #3490dc;
            color: #fff;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 45px;
            height: auto;
            margin-right: 0.5rem;
        }

        .logo-text {
            font-weight: 600;
            font-size: 1.25rem;
        }

        .auth-links a {
            margin-left: 1rem;
            color: #fff;
            text-decoration: none;
        }

        .content {
            max-width: 800px;
            margin: auto;
            padding: 1rem;
        }

        .section {
            text-align: center;
            margin: 2rem auto;
        }

        .section-heading {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .section-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 2rem;
        }

        .section-text {
            text-align: center;
            margin: 1rem;
            padding: 0 1rem;
        }

        .section-image {
            max-width: 100%;
            border-radius: 0.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 1rem;
            transition: transform 0.3s ease;
        }

        .section-content:hover .section-image {
            transform: scale(1.05);
        }

        .section-button {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            color: #FFF;
            background-color: #3490dc;
            border-radius: 0.25rem;
            transition: background-color 0.2s ease;
        }

        .section-button:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <div class="logo-text">Task App</div>
        </div>
        <div class="auth-links">
            <a href="{{ route('login') }}">Log In</a>
            <a href="{{ route('register') }}">Register</a>
        </div>
    </div>

    <div class="content">
        <div class="section">
            <p>You are first here. Register to get started!</p>
            <a href="{{ route('register') }}" class="section-button">Get Started</a>
        </div>

        <div class="section-heading">Explore Task Features</div>

        <div class="section-content">
            <div class="section-text">
                <p>Boost your productivity with our cutting-edge task management solution. Streamline your workflow, track progress effortlessly, and achieve your goals with ease.
                    Unlock your team's full potential with our task management software. From planning to execution, our tools simplify the process, enabling you to focus on what truly matters.
                </p>
            </div>
            <div class="section-image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbtor605tNqaMP0paeWIxY5Pg-EvAAtRyfXg&usqp=CAU" width="700px" alt="Image 2">
            </div>
        </div>

        <div class="section-content">
            <div class="section-image">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFBcVFRUYGBcaGxodGxsbGxobGxobGhoaGhcaGx4bICwkGx0pIB0aJTYlKi4wMzMzGiI5PjkyPSwyMzABCwsLEA4QHhISHjIpIiQyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMv/AABEIALcBEwMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAEBQMGAAIHAQj/xABIEAACAQIEAggCBQkGBgEFAAABAhEAAwQSITEFQQYTIlFhcYGRMqFCscHR8AcjUlNicoKS4RRDorLS8RUkM1STwkQWY5TD0//EABkBAAMBAQEAAAAAAAAAAAAAAAECAwAEBf/EACcRAAICAgICAgICAwEAAAAAAAABAhEDEiExQVETYQQiMpFCcfAj/9oADAMBAAIRAxEAPwDjgFSWR2hHIivRborCoFhm2JAPfE6xTgLbYtk/j5UwS2Z10oHCYm247FxTyyserPpm0PvTmyjRlYctCfvG9BTT6FcWiO7bYoVMnmPPnVdxR7jEGrZbOmXSsbg9u7mnsvEgjQGN5HPv79KawFKSz2hc0k9lo58gfDu9qZWnM6EjTl9VCtirYNy2WGg1IgjQ6HTuMfKvLF1T/eCfOPaa3A4U9s7k716/Zr1RGpMnx2FAYnGrBhgTSsx0HodxzMOrd9V01AiORnv+6r7h3nb+v9K+dcDxvqbq3CMwG6gwWHdI25e1dR4J0g6xFc3GOcSMuiW1LZERE+lcZgwGbMeyaKdgot3G8B1gXK2qyCNT8UbwDHLekCWGBKmMw3/G1WLheNDKIEaSomdJjMT4mdTvBNa8WssR1gAMec/j2rMAgzKoM7nkKHfAJcK3GXtIZGgPIgT7/IVN9M5hz0PdOvLfuooXAVgesb0Bjl/5UL83bNrmqMxjmXbKP8nzpfeXq0QD4VyLHexGdto1118hRHS1Ov4mUXYC2o/lB1/iPzonFWwYJGhF64RHIytv/IvvRiBiDE3dxI5kc9JoJmr3EysKx0IkeR28tvnQ2fx7/wCgoMKJxXTfyYcPy2rt+NbjZF/cTc+rE/yCuWLc8eVdz6MYE28HZVgBFtSZy6MwDNq3PMT99NDsEuibHPE0ixJGYzpsBv8Ajvo7jGNVGVD8TMFAjcse6TBG5GoIIIoXEkwZAGbfNBJ05d9NJ+BaBlQZu+Ne+ort/NoBy8/apmtxBUEEDX7a2wxgMx1Dcu7+lABoLggAjX8aVqrmCMu3tWrqOWmu9bldZoGIdDOkT+NKGuWqPKwPGtb6a1gia/bpc9qnd+1vS68tYCFF1KEuJTDECg3FYYFy15UkVlAYuljohhzvn/m/pTTC9FMMsHK0jvY86C6LcZGItNmyq6ZQ0gAHNOVh/KdPCrLZccivoBXmznki6bZ1xhFq6JODdBcHeLF7ZyjuZlJJ8QfxpTvD9AMJb/6fWr4dZcj1AYTT7g+G6u0oOjHtN5nl6CB6UeK7IR/Vbcs55S/bgql3oig+ArPiHHv2jSriXRS66FOrRlIgjMAD4akaVfTXhFH417f9m3+l/RwnjXQa+mq4Zv4AG/yk1Tsdw67anPbuJ+8rL9Yr6kdKWY+wiozvAVVLMe5VBJPsDRjCvIHP6PmJmeIzGPOtFWr30M4IuOxd9rydiHfICVys9wFRKkHQFhVwufk4wfK03/kuf66bRi7I45hwAauHAOIhAFIlNeyNDr8QB+jmEqT3Me+rBi+guHRwBbaCrH433WNNXjad+6tcB0fs5Vc2wJA5x/kb+vfSuDu0xlNVRZOD44tzG4Exo9yILAfoKAURf2Z5g1bLdydI99z91VXC8LRAtywMrpPYJZg8jT42MEffTjg+LNxA66yJY+J+iB4bT9etVFPMdhghnLofLQ91AqBM1YnUFYdZnYbHz0+ulvD8ITeCkSFMk6bDUeh0964cuGpceTpxztc+BpZ4OhRQ4OaJJBIIJ5d2lDX+jw+g58mH2j7qI/49ZD9W+ZGhmEjMGQNlzhrZYBSTzIPeBTKzfRxKMrD9kg/VV3hjXKIrI77Khi+D3F3SR3rr9k/KkGNwRHh4aV1OKiu2FYQyhh3EAj51F/j+mVWd+UcascG6y8inaZbb4Rq23t61dMTfyrAo3iWFtWnPVqFMdqCfMCJ0pFibo5+vLQd/311YMekeSOWez4BuFMrNdzLDK8ajQDKrLlnkc0+Exyp0iLGw9hXJb3TzEi8xtunVBzlU27THIDvmKZ5I1+LSfCuv4W3mVW0ggGdeYrlzwe23stikta9GyWlPIfyisOFt/q0/lX7ql6nyPy+s17l/A1qXKKcAT4K1+rt/yr91QXcFa/Vr6AfdR1wUO+buHz+w1OUpe2FRXoX3sHa5qIpdjrK5GKjXv/Bp7dVf2vTNS7EYeZgH3+80qnJO7f8AYXCLXRVbinnS7EKae4hI0pbet7161nniG9rQTrTi/b1oC8lEwBFZW+U91ZWGD+jmHe2TymJ8Y2mPX5107oxhzcuIDsO0fIevkPWq7hAkgEgfjxg10DopaVLdy4WXzn4UUSSddB91cKi5ZE2dLesQXpxxZ0NuxaRXZ+02a21wJrltt2GBQzmOaDsKqrcXuW0QJcuWmCa/nrgzxZzK2XEDICO2xy5dgWkwKb8Q4W2KxFy9bxGHu5mUoqvacqqwFABtghiM/wBMxJjU6B3OjWKRcotOBBEoXX6HVggW7jgTCkadlZPxGvRjVHG7I06RcQV4TEi4oIWHs23EhghlrTFgT8ZkaBhttRuH6c4tR+ct4dmhYE3LJOYFpPWiAAisx57aUnxGDcNme2RLb3Ftg63UcCLttG1ync6BATJrXD2mEBQ0djUdaoYlrx0yO6jMSDqIy6mdBWpGtlywfThXdbf9nYszIoCPbeDcaFLAGVGWHJOgBFb/AJReIpawZV2gXXW2fFCc1weqgr/GKQdBsAtzGG4YYWkRsxyM2d0CiZtrcBPbaSfrqfp6RduXVMFLFkpH/wBy6AzeGii17mpzpcex42xP+T/jmDwyXReuZLly5ocjsMsLlEqD9LN710+yUuIroQysAykbEESDVd/J3wZLWCQlFm4es2BMMFCyY1MAVbQtNJq+BUvYg49huwrdzRoAT2+wPiBG5HKobnDAihRrlAHLl5ACm/F0m3A5suwB56fEQN4/puJ7lqRrQs1FWsk22qLitwWLlq4lw2+scqUEZbj5ZAE6Anb1mnOLwfOud/lSvkDCp43W/lFsD/MfailbN0dIwF64VDXCFJ3DAGCfoiO6tOkGPbD2Hu5GIICMyxmRWkZwDvBI0NVXoxfYFLtx2dmRBqZg5dSNYA+81cuJ4+wlo9eVyOCpU6lwRBUKNTv6eFIpKStDuLTo55wvG2kk2r4VjMiWw7HtIVXdrY0Bk7kUYcLk/OQVgFesQFYU3JLI9nMk9rQRJBJMVzXjY6i+yJn6okm2XjMU5TBIkbHynSazBcbe2ZS4yHvVip+VFZH5A8aOsYLi+LSMt0uNBlcC4JLFYNy3Lct9AJpzw7pYXKK1oNmA7VtgwEkhZU6gGJ8vKuV4bpdc/vFt3fFlytGYNGe2VY6idSasHCuPG9ftJbtA3Lk/9S4xGhMEOlokaFxDNsB3zR2jLwK4yiW7HOSxY7mSapXSbFEobSfFcm2uoHadSFEmAO1A176tvHcC9hOsU5l+kkkie5c2qHujSdCNarnGujT4i0iKwDAktmGhzCCPs9K08iiuB4Q2ZQv/AKH4j/2d0+QQ/U1dP4B0nthlwd0dXfRElHIUliilkGbTOumnOdJgxRbv5O79v85NtgusAH7qquJ4W4uZSO0x1AGkk/KoSlGaooouPJ9JLEHvjbnrtULIe6knQ/hKYXDpbRQGIDOdizkak+A2HgKfMfCudoqgZwagcHu+Z+6heN8etYYIbmbtkgBYJAAlmIMaDQeorzAcYsXx+Zuqx5rsw81PaHtU5QlV+B1JXQz4dgkuh8xYFWymCI+FWB1H7Xyoo8Atft/zD7qVJiblpma3kIYAMGndZhgQe4wRHIVrc49ihstmf3bn+uqwlipbdkpLJfHRH0k4Dbt2jdtZpBGaTIg6d3eRVHv2wQat+P43fe2yXBaht8qtty3Y61WnTeuyLUkmjmkmnTEeJtUvvJT++m/fSrELAJphRV1dZUudu4VlYJ0lMIsTkH48aq3Sa9eWTaKwv0WRLg8YNxSV8wRVgw3HMPdWbd1NN1YhWH8LEH12pZjiGmHDeRU/Ua5saafJ0Taa4KcnS26NLlu247pcfLMV/wANMcH04CaZLtuNuruAD2QWz86Tcb4cVYkDQ0kIq+zI6o6dhvymMu1+8B3OiEHzJ6xvnRS/lEsXD+ct4a5v8Vkq2og9tmHLTRa5MBXuWhsGjv8AwDpzw0I5Z7dlydUV3fMqqAuXs6HcZB3eNJ+OXi9i7cSxeU3bgchwjvBKkmLZYwDAA5KBNcv4Bgle4pfYEGORj3+qu18LvgqCWkwB5DuA/HyERnl1kvrkrDHaf2L8D09Nq3bt/wBgvkIirIVwOyI2NujbX5Qswk4K6v72Yf8A66aBxUiOaPz34N8X2KrXThLjqj4Zktk63GJKLAJ7UW+yDG501oxul+C/7mx/+UB9dHrW0Ufl+gfH9lOvflDwpJBt4sftBkIPiJuTHpVH6ddILWKuWja6yERwesyhizsDplJnYfKu0ZD31FisGHUg1RZPNCOC9nLE4rctZO5QNO+NxSh+N3WvtcuMWzGIMwq8lUfRA7h9ZNWfpDwJlJjaqpc4S0nc1zr9eC/btDfG4BMRbI0BMFW3hhtp3bgjuqjYzBvaco65T8iO9TzFXjgrjICDJHxAeHOKa4jh1vFFbLxmJOsSUH6Y7u7ukiZoqVMpLGpK/JzbhmDvXrgt2UZ3OyryHMn9FR3nSu+8M4ItjB27E6qoJddD1nxF1J2ObUd0AUJ0Zw1vDA4a0OwmudozOWALnQanMfKMoplhncrlYiZK/wApiT5is5piRx69iC/iMXfxaWLl1Ht2ouNkt5CzHMtoOczBj8R0yjQabRarWHpNhMIRfuPGjkeuUBfsNWC3a86yuXLFaUeEY1iRBoNeCWs+bIJ74FMOrP4NegEb/XRcUDY9FkDb6qjcVLmH4moXUnvoNBRxn8oPGUfGshbS0oQaGMzQ1wz/ACj+GqyrahlbYzmU6+hGxrsPHehOGxBLPbAc/TQ5WnvMb+tVIfknuh5TFKqeIJb2GhqkMiS1Yk8bbtC3h/S/FWhBfrUEaXPi9H+Kf3pqwcO6WWb7KhD27jGADqCd4DL9oFXCz0QwCWxb/stttILuSznvOcQVP7sAcopfg+gmBtXBdAuEq2ZQ1wlV8o1MeJNJlx4pq0uRoOcf9AWKSYgH659qHPDb7/Dbb1AH+aKuC4yzb0XKvtUVzi1vXtbD6MSfATpPnQxNxSiCcU25MqtvotiHBJNu3z7bTJ007MwInXWl3FOjWJt6dV1gG+RgT/KYY+1XAdI7adm6hQ/ou2YgHZgMhIB25Ext3FYjjdm2gLBsp2hdD5Zmg+ldaOfg5NcEEg5lI3UqQR4EEaVldHucbxJJ6u0gT6OdmVo8QoIB8ia9o0A4mAQQQSCNiDBHkRtTbD8euKMt0C6veYzD12Pr70rU1aOhvBusudc4/NoeyDs9waj0XQ+ceNCVVbCrvgJxnB+sQHJlJAMRBEiYIGxqq43grqfhPzrr7WpoHE8MDaiPI7e+4+dc+xbU48+Dcbg15bwpJ2rq9zo6jCYHkY0+dQp0ZTw96DmkMoFc4DhFG61d+DYq2SLYIDgTlMgkDcgHcajUaa1UeM4gWbpt6DLkMaQwIB5nvkf7UmXjGW5bZTqrBhBJjKDoZO0HLy0PunxbLazfI1LWjtFoiiEilfAcel9UKn4o086tBwlsELBk9xmNCQT3DskT30IQcuUPOSXYAIrcAUfbwtskgA6c5MTJBAPMgjX0rLlhFWSCdNANyYLQPGAapoxN0BACvStHNYQMFgknu5bwT7EVImFXURt4+AP20yiwbIQYzBq41qpYnBZGOgOp3JHPwrpPUWixT6QAJGugOgNA4rg9suFCEghmOp3kePjSzx7BjNI4/wAa4C1qcTbfLbmSVBJtE7Zh9K2TpO6yPE1EtziCIV1W1cQk3bVrrW20XMolRMaHYGRprXW7WFsDMuU5Y7UkleYZTO5EGR41SeKcOvNcd7OIW1aQ6as2S2ojKyJG8EE7gCJ0rONLkpjltdEyY65etWroBBUrnABDZGENoRybL6CmOG6wXWJkqSpQ8iCqqwPjIJ9RSnAcQFrEsg7S5balv2wkNp4jKfWrAW3A+EkEeFczOgY2AEfKeec7nm8x86LGKHIj3qr8bxMAGG7gqkguxIVUMawSRtrpzqbg/RS4658ZeuFm16q2RbRAdlLJ22YDuYDlruaw2fRGeq5Y8xHEkQS7qB4mk+J6X4ZP71J7pH2U4TozghE4e05GxuL1h97mY0V/wjDRHUWY7urtx7RT6P2T3Xoo+J6fWl2Kkd80pxP5S12UE10d+AYP/tcP/wCK3/pofHcNweTLcsWCg2BtoQPIZdK2qXZtm+jl7dN79z4cqLOrOwAj6zRq9PhbXUlz3qDl9zTbivEcHZIt2cPZUPILKiqRpPJftqndIMNnuFFCBQVUGG/TKAHxgLWhFS6NKbj2PcJ04xGIJFi1IG7MwVR4TzPlRQxXEbg7TWrY8Mzn2gfXVW6NYsWsltkHaKFpJUhWuFGI0OogV03GYSxaUnO2g7x91GeKf+KBHLHyyg8U4NINy7iLgbvMIk7mBqSYnSarlvjLWHZrDuBPZa5lZwBsdonn4fOh8fxW9eLdY2sgBNMqjyidNNd96EW6NFINw8gD2Z8RGvrTY4Siv2fIk5KT4GlzG3r8XLrNkJIDR2nPMJpLE/pa+JpnbuWrRAI7QkrZVsy25GrXWMhnOwWJ1+iJoHhOCxV7NllEIGZgoLBe4OdEXbUEUVins4fJbUB1DFjscxOk5oGY7anu5VSTpCRjsxvb6bMAALrL4ZiI9OVe0C3TS3yw6ew+6sqX7F7j/wAiv8KwLX7i203O55Ko+Jj5fMwOddTsrbsWoHZtW1J8lUEsxjc7k95JpD0X4Z1FuWH525Bf9kfRT03PifAVYgAQQRIIgjkQdxRnO3RKMaEv/wBb4KY60/yNHvEVIvTbA/rf8DfdXNuJ8O/s+IuWSNAZQkbodV89NPMGoktifhHsKZQTFc6Oor00wP67/C/3V6emeBjS/wD4X+6uZ9Sv6I9hXvUL+iPYUXiTAs1Fs6T8SwGKAPWguogMMymO7UaiqO9tQ0K6ZO/MJjx1mj0waH6I9hWHAp+ivsKKx0qD8m3J0joDjLYH5u4jssEqDyH9Y8pFX0cTZspNpZUypzzlMFZH5vQwSPImuD9EsR1HELewW4Ch5fGIAH8QWuz27njUZf8Am6RVfurY1XHtJbqlkxJzmTG0nJrWxxrFcrW0IIgguSCPEZNRQSuO+trVzvrLIzaIOOLYkE20JGxLmRO8djSs/tt0TFu2ZPO4w5AfqzO1Co/nW+etuzaIn/4jf/VWv/K3/wDKhruNvMZa3bEAgRcYzJBmerERHcZnlGsykVHfygE0VNmcEKnvu7mVCmFUkHMWUSQpOUGASfc1XuMcHe3cOJwrRdJBdGbs3BzA/Rbn3Va1wVyGYqO86iYHcO6ql0p4zatWwOsMvOXLHw6Eke4HrST2b5LY9VHgBu8aw15MyKEvlouW27LZoAMHaeyPamvB8cYyuDP4965Y9xXd3iMx2/r31Yui3Elt3MpkK3ics8jGyztp4VOUfQ0Z32dUwQUOtw8p+Y++mT8RtjmKrFy8xAymPtFInwt17jILgMEwJ7UeImjCT6Qs4rtl/fi9scxQ1zj9scxVJTgF8nVvlRlrowxHaY0z2JrUc4npPbA0+yqvxbpELkidPP7qn4h0ZhZDH3qncTwhSRJqUk26kyiaXKF3FMdmeRsDUXF+JN1hYMQTbt67HVEf4hrEsdKBxNs0wxvDw6W7gB7VokxEDq06sSSewD1Z3317q68SpUjmyO+wA44gHKcpAIBU5SIcONTr9lWPivSVrkjNpJqrX8JAJGsAkxrEoGEk+u3dRN3DnKrd6of5lB+2rpslSNRiFLyyBt5HfppJFWXglzCmMyqvMl5VBzMKmrR31VcPb/OR4H7KIe0SjAx2e+SYHa9APOkT5Ha4LVxrpPY6sph3uXWIIUKjW7akiAxBjORMjsiSNaqTYe6yS1tgBpJ+sd/pReDsso+HOCNWt9s+2jD51redT8IYwdc7KCD5HX0otX2BOuhaq1lT5f2V/mH+qspKDZ1Sy1HWjSyw1H2zUCqKr+UTh2a2mJQdq2creKMdJ8mP+M1T0cGCNq6zjLAuW2RhKuCpHgRBrkVyw1m7csvujET3jcH1EH1quOXglkjYUhqQUCL3lW4xPlVd0R+Fh9toNSORStsRUyXiRTKVjKDiuTTiDlDbuL8SOCPcEfMCuz4Pi6XEV1I7SgjyInurjGJXMjDw+rUVZOh+PLIi75dOXKub8pOrR0YHzR1K1iATEVOjn8RSnCPoNNaOS5+DXIpM6NQ1XPcfbT5Vstw0L1q8yKlUjw+umUwahSvQeLhzlMMq6mRInl7V5dccon0qEsFHgN6OzYYw8iXjfEMXYtN1eJi33OoZlHNVfceEgxyrmmPcuVLT8IAGkgAaDw9NKtnG8ScReFofAnaePD4VPmfqNV/H4PtaD5H7qb5H0xXBdoT4azLRV24Dwi2ynMJkbcz4DxpDgMB2u0PkfsFXng2GtqNh7N91K58mjHgp+G45cYdUzOirpE66aQ+xLeG2m1M+EX1t3rVx+0qNOu4kFcw8QCfqoTp1w7qryX7YhLmjRyuDz/SXX+FjQuActBOi8v0m8T3Dw0P1U9eUJbumdlDKQCCCDqIgzPOtww76rPRPiAZDbcyyfD+5tHofrFWayiMYPtz3j66ZNvhAaSVgPESCprnvHbe+n1fdXVsRgLbLBSB3gmR4wdIrl/Sez1dx7bZZUxyE6SDE8wQankhKLTY8JpqkUnG2Trv+PSmdkDqrM5dZTXvLX5j0bdtKX45t6mwmLAsWwWIyuSdcoAzW4zEbyWaF2MHurowsjkRDc7UbtPVxqjwMjI2iwE7QIkVLlzYe0SCDkgg79glP/WfWgLtzKgDCMqqYYKuq3CD2U7Q38qLwjAWEUbKXXcH6Zbl+9XQnyRYrbRwfH66KuXOy28OuUxyggg+I3Ec5oXEiTQ6YsqYapS/kUXQwF9VHZDR3IGA9c2/zqJ8eTp1eniAT7t/SoxfnY1mfxo7M1I3if7ifGV1rKjzeXsKytYKLngONZIW8sftqCV/iG6/MeIq0Ya4GAZSCp2IMg+Ub1QsRiFRCW13gd8CTry0BqDB9KEtmUS4vMjMrKfNYHvofGudRcldFW0jpoNa8R6M4F7P9qxVp2OgJRnBjMVXsoe1rzjn3CgsFxG26lpy5SQQ2h0bLKyYaeUHnrFFflCxQThtpSLYzvb7L9YV7KNcI/N9owcup03p8a5Em+Cl4vobhmuP1eJKLnuBUaxcJUJ2ipYv2sqx2udQnoRa0/wCdt6lQJQrqwlRrc5ivVdG7Ia0S0LocSsm8nXKZPNri78lHI1PauhiDnAzspJW86n/mUK3CAymCCvYHmda6OCQKvQqyRpjrGoBEmNCYHM7mtG6EJyx2D5nW8V0XRj8B2o5Ma0Am4R2FYxil07X9m0kTlVe13563OIZdnc5Ncv8Aa7epw5KMhkbFCLjffW4MS8D6AYViy4nG2gSVW2MPdVyWMyGD2wZ+GAN9ac4bopawOKe2l13Bto4DKsjMXUyRv8PcN6XdHzOMw6dZcaHYQcXbfMqg3EuMi6tmDHv0Qelk6Qvm4jd/Zt2V5/tv/wC1Q/I/gy2H+SDEjz9amRh3UrRieX11KGPcfnXnWdg0zg7gVH10N2f6UEH8Px60Zhts59KaPLMuCZnjXmar3SPjAtqVB1jWp+IcUW2rOTtoKpeGJxN/tfAvabynRfU/IGqrhWwN+ENOF4dktlnSXuHMdeR+Ee311E9gsZ6v66Y4h57vaobSzrFR2t2GuKBDbIPwj8etH4LEEHn6Baiug/ifvoZLpB/3pmwDHpMguYS4GmUi4CY0y/F/hLD1qr4XEKBvqRp4Dv8AOpumDO+HBViArBmAkSNp9JFIeG4kaE7n7OVdEFcbIzdSLbwriORxkPaG3cRsQa8Xpfcw+NZrmYIyhCfiyFWzo0c1nccwTSxrg0MqPDvoXGcKuXSuUhjGh2kDX3E+0UY0nYr5VHYeH9M7Fy3LuubX4SpUrJykdssdInSfAbVzzpPxLr71y4NAxECV2UBROu8D517wzg7W7eUjXzNetwwk9owCQN+ZMD50J5duAwx68lVu23c5VAJPlTVuFRaS1Cqy55dXBLm4UOoK6QEVQJNXXAdEbkA5QoMak/g03t9El/vLnos/XP2U0Pk/xQJaeWcgxXCAcwzbluYPxMG+z51lrC3FUoFzS7N3fEFEba/DXZh0fwyCcmcjmx+6BXj4dUBFtVTQRAA8Pka6YQm+2iMpR8HH16O4l9erIHeez/miaV8e4Q9jLnjXUQSdiAQdN9RXYrnaGvMf7/jwqodMcJnslo+Bp/hOh+RB9KpLFxfkRT8HMBRCOx0UE/On+CjLAAoxHqaQbKx1F39Fv5T91ZVomso0a2A9ILnZC7af5mX7A1I8FbDXLanYuoPkSJ+VWrFdGcViH7KKg7MF2A2B5CTux5cq0xnRC9hCtxmVwQw7OYEMUYCARqJI1B9KjFqMUisottuiycIB6tBIkgd41arJ+UDAYi8thLFu+6r1rM1pskFUXq1bsmZII9aQcGuN1lpMpHbQbjQSJ+U10UXKT8ZWpP7NndUjlJ4TjVCqcPj9RaTMHuEjMS7vK29Ch7E9xoZ3xQLf8njhJYglGOUsQUIBTTIAco5ZjXZBc0PlXiXD+kfc11URs43+ccsDhsQgy3dGwqMApQsqagSA4zDvY0dw/DB3HWObSnq2JuYRDmLgpdtnLJzXIzEkRpqa64t1v0m9zRAvN3n3NYxyroDgQ2JtXWxFsuC0Wmw6W7jKgNsOCgMKJgajQEc6ZcQbNjsWZP8A1LagDwtWxHnJ+ddF6wncmqN0ZuI+PxVwkaXb8SYGZGFsEz4A+1QzraKXtlcTpt/QZb6O3iubLH7JcBvu96EfDMujZgRvJ1FXpE85qgdLOIFcUcp7PVgvrpmDNlYDmckE+GU1Gf4fH69lYfkc/sT4e2GbfQb/AGcql4xfFu2dY0qjYjiDo2dGKuNyWj6P0gdMoXtz8Pw7EmIeJ9I2u2ysZWIg/wAW2+o0g/xDWmf4rgvY0c8ZAXEOIm6x17C/4jVg4Xh1tWxM527TeZ2HoIpFwXB9Y0kRbSN/pN3eQ3PpTnEXFOuYfj1qGWS/ih4p9hDXhIBNTpdUD+gpRbuLO8+VHW7wgb/KotJDqybEXBFKnu66fj50xvMSJgR3mlWJ05gfjxIp40CRNcPWW2ttEMpGniPOqPg2KlkM5gdu8zBFXGw/4j+lVnjNnJiZ2D6+p0O3j9ddGJ9xIZF0xhhrvmSd/wADlTfh2IyMpIgAz9/2+9V23aPMAdw3PoOXrRqIRuuUeOUe55+QFPJJipnRg6Ed/wCPCh8TBUgDtbr+8uq/MCkvBcSSoQnUyVHgNx76+tNIaa5HHVnQpWi7dHuIpcs2wrEkAps0diQBmjKWygGJnfuo4jWO/wC2qX0ExJVsVY36u4l5P3Lgy3APKG9Wq5G4rgOjBlOxBkHX758or1MTuKZwTVNkJXl30E6/d6H7tTR94a/P3qC4uvn9v9ashGKLlmCf5vQ7+xzUv4hgA6spGjAg+REGntxdjvyPjPLykH3rUWgR5ae3OmsBxBLbW2ZG+JGKnzUkGp1uU/6b8N6rE9YB2big/wAS9lvllPrVdKVztUx0bdZXtaZaygMWrF9KTb0Uye4CaXrxzr2Ku3a3g66em1BWHw9yFBILcwdZ5RpU9zo0toZmuW1IByiGVjPNjJP42qLSOhOT6HfCcWlu8jO2VFJJJnSVYLOvfHLxq1p0mwZ/+VZ9biD6zXJL3FjbZgqhgYmSeQjTwob/AIwJk2UPr/StjuFpLgnkSk7bO3px3CsCFxNhj4XbZ/8Aavf+MYcHK2Isht4N22DHfGauHnils/FhkPqP9NSW+MWB/wDGX0y/aKp8j9CfHH2d7w2IVwCjqw71YEe4NHKZr53bimEb4sN7BR9UVi8QwQ2tXF/dIH1PQ+R+mHRez6LBrj3CsW2a7dRtWu3nUiCCGdiOcEEH1mq2OL4WMp/tMHQjO0EcwR1m1H4LjeFgIoYCNAUH31LLKUkkkx8aUXbaLXiem+MIKdmI1MQD4dkZp7tfeq7iMa47Vx1P0pbMjakANBBLd0AQRoANSAbvW3e2ClpSCQpgOy9ljJI05DT9ITykYYJtQyqWJ3KAgnTQlRop7RJ17KDQV14k4x/bsjkab46JMXiQYjLtyaVJ0LwdQiljmbtNOx2pZfcgzGvlBM66jkTodNPhFSXkiCFAOhlOYMtMTB7IBgEADfevcHjUW6rXCoVYIIDHUTyURqd9PLvrZHxYIq2WvCLktKh3iW2+I6nWe8xQzWlnSfx6UM/HbJ/vP8LfdUa8Ws/rB/K33V5ekrujv3j1Y0s2vH3pjbkajLSO3xex+sX6vsoxON2AP+snvSShL0FTXsY3DJnWfAj7aWYy2DqRr7fbWPxmx+uT+Y0Df4pYP94vuaMYS9Gcl7PVOU7n3FTPhkuRnUMRtoSRStsfZ/TWp8PxSyP7wD2qusvAm0fIHYs8lWIJBIXMxI01LaCpyoTXMxb9FWBI/eyjTymoLuIRrjZDmBMyDtI1AMGNZ2FSC5A0GUd8lmJ7kB09Yq3JENwjukMDrIJLtqFkSuugJ7vAVZVxBPP8e9VPDWAxLXNYEhdwO4eJpsvFktqq3DlMaCGO3kI7qjki30VxtLsc8FxXV8Sw7n4byvYc7akZrfPfMoHrV54T2VuWzP5to1EAACIHh2SfWuWPxazcZAGlg6lOy4h57LAwCCDBnwrrWHthmS7bEW3tiTPIy8nmWkjXxaeU9X4zetPwQzJbWiZ9ge7T7agfby/H30PjeMYa1PWX0HgpzH2WYNJcV01sqPzVp7nixCL9pj0FdG6RHVsd3EJkD8dw94rZLZEkiBp9X+3tVExvTLFvIQJaH7IDH3ckfKq5jsfduH85cuP4MxI9pge1B5fSGUPbLd07vWbloAXEN1HBCghiQdGGm3I6/o1QmrGMHTasNK5bcmquCPLWV7WUAheF4zbt21yBWcDQsAIPgKWYjGtcYtcY0rsr3iQN/CmmGwgKyBmj8aUlFd2E4G/ZuKEuWwCTGYaMPHxpNxLDC25UGRyo24ozAjb6jROAxQNxp1kaAAnzmNQvftO0gTRgrYJvgTWMK7nRGPkpO5gbDv0o0cMIy5lgt8IMAmBJgEydNfUd4p5edm+kbajUgQXMiBnaCEGpAUZpkAA1LawlpmDFCzDYs7FgQc2pLEL4gfCJJMgCrLGQ2K/ieD5BL5UExLGNeY035/ymhbvDgIOYaiQAZJHh3jxGlXS9YtwS6gwMvbUEjRRBnbYacixHIGlIRNgoH7oj5fgTGlFwRlIrrYDbUyT+PSn3R/hgVS7DtH4TMZVEHMDrGo3IK6alQZqRuHNIKjv1aYMRMx2j6TNFtiXQDPEQGDJ8IA0D5SzKySYlSGOUgCCSdGFOzOVnl+yBoAADqQQNhJDBAcrlVJeVIIASdTSy8giEdhvpmPZkSc3eMsF30OoFFXsTAgXWK6nLkUzMMdGWC7GD1baKNZpfexL/AEmDwN/Mk6NuQW5mSSI2pnQEQ4lyR2iZOugGpMENHKQDqOQUGlFxDNNlcMCYbuExudzpz0M+Y7qX4g61KQ6IRXtYBXsVMY1Y1FM6VK1a2RrWMadWa8IovLWpWm1BYMRWBamdK3VK1Gsm4dcyyCTGhgcztH1U5SR22+I6Kv1Dy8KRhfx5U2wdwsQTqQCR76VOcaHiwi4zaIh13Zv2v6VvcsXLls52BA1VjvO0eVF4bBwJbnqe+tcThXfcjKNlU/MxuantyPQosrBp+nE7rgK9x2QbKWOUc9BsN6T3rRRoPnU9lqt2iXQdinkeR+VF4OMgJill3aiMJdhSKFcGvkmutrQd471O70NcM0UBg7tXhNa3GqMvTGN81ZQ/WVlEwGbmUkjmNa9sYt7Z7DESf9zXlZSDEt25p51Lw+4VOh8SNIMHSdJPvWVlPDsEg0YuAeZWfCCIzGeW+47R76YYG8QmY6aTA7viG3LSQPUyQBWVlXiSZ7icZmPVq+WT2mCklVDZZ5bnTTXfloZrNpbQOhOVc75jJyqStwnceIIBJ2gb1lZRAe4hm1E66n/x6ZzvlDJ3ZmOkkUFexMhmMgfESABA0/PKAf8AqnYDYLA3rysrMyFl54zKw+HTTxEgE7knQlu6RQ+afhbfvEHXSe7Ub906c6ysqUh0a3jlAAoLLNZWVNhR7krMtZWUAmptk6DetzbCwPn31lZQXYfBk14RWVlUAamsk1lZWMbTRmExpTLlEtMCdvWsrKWfQUMVS5c1uFj4KQB9Y+2t7OCtN2QSrfjmKysrnKEdy0wbK5zaaHnHcalVaysq0OicuyRzpWI+lZWUwDzPUbvWVlYwKzb1A7V7WVjEWevaysomP//Z"width="700px" alt="Image 3">
            </div>
            <div class="section-text">
                <p>Experience efficient task management like never before. Our intuitive platform empowers you to stay organized, collaborate seamlessly, and accomplish more in less time.</p>
            </div>
        </div>

    </div>
</body>
</html>
