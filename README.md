# Symfony I Am Groot Exception

### Alpha 0.0.1

This useless (but funny) exception throws an HTTP 523 error, that error code has been assigned summing all the decimal values of the word "Groot" ( 71 + 114 + 111 + 111 + 116 = 523 )

### Basic example
---
```
<?php
    namespace AppBundle\Controller;
    
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    # Save your I Am Groot Exception class in Exception folder
    use AppBundle\Exception\HttpIAmGrootException;
    
    class DefaultController extends Controller
    {
        /**
        *   @Route("/i_am_groot", name="iAmGroot")
        */
        public function iAmGrootExceptionAction()
        {
            // Throw your I am Groot Exception following (or not) some logic
            if (true)
                throw new HttpIAmGrootException();
            return new Response('I am Groot');
        }
    }
```

### TODOs
- Code a Bundle for this exception
- Add a event listener for the possible erros
- Ask to Marvel (or Disney) for the rights of Groot character
- Try to make the HTTP 523 error a new (useless) standard

### Developer
- Jason Jiménez Cruz
- jasonjimenezcruz@gmail.com
