<?php
///**
// * Created by PhpStorm.
// * User: thang
// * Date: 28/01/2018
// * Time: 10:41
// */
//namespace Pack\Thng\Controller\Adminhtml\Index;
//
//use Magento\Backend\App\Action\Context;
//use Magento\Framework\View\Result\PageFactory;
//use \Magento\Backend\App\Action;
//
//class Index extends Action
//{
//    protected $resultPageFactory;
//    pubic function __construct(Context $context, PageFactory $resultPageFactory)
//    {
//        parent::__construct($context);
//        $this->resultPageFactory = $resultPageFactory;
//    }
//
//    public function execute()
//    {
//        // TODO: Implement execute() method;
//    }
//}
//namespace	Packt\HelloWorld\Controller\Adminhtml\Index;
//use	Magento\Backend\App\Action\Context;
//use	Magento\Framework\View\Result\PageFactory;
//class	Index	extends	\Magento\Backend\App\Action
//{
//    protected	$resultPageFactory;
//    public	function	__construct(
//        Context	$context,
//        PageFactory	$resultPageFactory
//    )	{
//        parent::__construct($context);
//        $this->resultPageFactory	=	$resultPageFactory;
//    }
//    public	function	execute()
//    {
//    }
//}
namespace Pack\Thng\Controller\Adminhtml\Index;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use \Magento\Backend\App\Action;
class Index extends Action
{
    protected $resultPageFactory;
    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Pack_Thng::index');
//        return parent::_isAllowed(); // TODO: Change the autogenerated stub
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}