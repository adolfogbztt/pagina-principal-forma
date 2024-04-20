<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [{
            "@type": "Organization",
            "@id": "{{env('APP_URL')}}#organization",
            "name": "Forma Producciones Audiovisuales",
            "url": "{{env('APP_URL')}}",
            "logo": {
                "@type": "ImageObject",
                "@id": "{{env('APP_URL')}}/assets/logo-solo.png",
                "inLanguage": "es-PE",
                "url": "{{env('APP_URL')}}/assets/icon/apple-touch-icon.png",
                "width": 180,
                "height": 180,
                "caption": "Forma Producciones Audiovisuales"
            },
            "image": {
                "@id": "{{env('APP_URL')}}/assets/logo-solo.png#logo"
            }
        }, {
            "@type": "WebSite",
            "@id": "{{env('APP_URL')}}#website",
            "url": "{{env('APP_URL')}}",
            "name": "Forma Producciones Audiovisuales",
            "description": "{{$description}}",
            "publisher": {
                "@id": "{{env('APP_URL')}}#organization"
            },
            "potentialAction": [{
                "@type": "SearchAction",
                "target": "{{env('APP_URL')}}/?query={search_term_string}",
                "query-input": "required query=search_term_string"
            }],
            "inLanguage": "es-PE"
        }]
    }
</script>


<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            @foreach ($faq as $f)

            {
                "@type": "Question",
                "name": "{{$f['pregunta']}}",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "{{$f['respuesta']}}"
                }
            }
            
            @endforeach

        ]
    }
</script>
