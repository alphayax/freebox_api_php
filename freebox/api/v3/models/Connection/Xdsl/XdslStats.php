<?php
namespace alphayax\freebox\api\v3\models\Connection\Xdsl;
use alphayax\freebox\utils\Model;

/**
 * Class XdslStats
 * @package alphayax\freebox\api\v3\models\Connection\Xdsl
 */
class XdslStats extends Model {

    /** @var  int (Read-only) : ATM max rate in kbit/s */
    protected $maxrate;

    /** @var  int (Read-only) : ATM rate in kbit/s */
    protected $rate;

    /** @var  int (Read-only) : in dB */
    protected $snr;

    /** @var  int (Read-only) : in dB */
    protected $attn;

    /** @var  int (Read-only) : in dB/10 */
    protected $snr_10;

    /** @var  int (Read-only) : in dB/10 */
    protected $attn_10;

    /** @var  int (Read-only) */
    protected $fec;

    /** @var  int (Read-only) */
    protected $crc;

    /** @var  int (Read-only) */
    protected $hec;

    /** @var  int (Read-only) */
    protected $es;

    /** @var  int (Read-only) */
    protected $ses;

    /** @var  bool (Read-only) */
    protected $phyr;

    /** @var  bool (Read-only) */
    protected $ginp;

    /** @var  bool (Read-only) */
    protected $nitro;

    /** @var  int (Read-only) : only available when phyr is on */
    protected $rxmt;

    /** @var  int (Read-only) : only available when phyr is on */
    protected $rxmt_corr;

    /** @var  int (Read-only) : only available when phyr is on */
    protected $rxmt_uncorr;

    /** @var  int (Read-only) : only available when ginp is on */
    protected $rtx_tx;

    /** @var  int (Read-only) : only available when ginp is on */
    protected $rtx_c;

    /** @var  int (Read-only) : only available when ginp is on */
    protected $rtx_uc;

    /**
     * @return int
     */
    public function getMaxrate() {
        return $this->maxrate;
    }

    /**
     * @return int
     */
    public function getRate() {
        return $this->rate;
    }

    /**
     * @return int
     */
    public function getSnr() {
        return $this->snr;
    }

    /**
     * @return int
     */
    public function getAttn() {
        return $this->attn;
    }

    /**
     * @return int
     */
    public function getSnr10() {
        return $this->snr_10;
    }

    /**
     * @return int
     */
    public function getAttn10() {
        return $this->attn_10;
    }

    /**
     * @return int
     */
    public function getFec() {
        return $this->fec;
    }

    /**
     * @return int
     */
    public function getCrc() {
        return $this->crc;
    }

    /**
     * @return int
     */
    public function getHec() {
        return $this->hec;
    }

    /**
     * @return int
     */
    public function getEs() {
        return $this->es;
    }

    /**
     * @return int
     */
    public function getSes() {
        return $this->ses;
    }

    /**
     * @return boolean
     */
    public function isPhyr() {
        return $this->phyr;
    }

    /**
     * @return boolean
     */
    public function isGinp() {
        return $this->ginp;
    }

    /**
     * @return boolean
     */
    public function isNitro() {
        return $this->nitro;
    }

    /**
     * @return int
     */
    public function getRxmt() {
        return $this->rxmt;
    }

    /**
     * @return int
     */
    public function getRxmtCorr() {
        return $this->rxmt_corr;
    }

    /**
     * @return int
     */
    public function getRxmtUncorr() {
        return $this->rxmt_uncorr;
    }

    /**
     * @return int
     */
    public function getRtxTx() {
        return $this->rtx_tx;
    }

    /**
     * @return int
     */
    public function getRtxC() {
        return $this->rtx_c;
    }

    /**
     * @return int
     */
    public function getRtxUc() {
        return $this->rtx_uc;
    }

}
